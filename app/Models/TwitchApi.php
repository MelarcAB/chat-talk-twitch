<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class TwitchApi
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://id.twitch.tv/oauth2/',
            'timeout'  => 2.0,
        ]);
    }

    public function getRedirectUrl()
    {
        $queryParams = [
            'client_id' => env('TWITCH_CLIENT_ID'),
            'redirect_uri' => 'http://localhost:8000/auth/twitch/callback',
            'response_type' => 'code',
            'scope' => '',
        ];

        $queryParams = http_build_query($queryParams);

        return 'https://id.twitch.tv/oauth2/authorize?' . $queryParams;
    }

    public function getAccessToken($code)
    {
        try {
            $response = $this->client->post('token', [
                'form_params' => [
                    'client_id' => env('TWITCH_CLIENT_ID'),
                    'client_secret' => env('TWITCH_CLIENT_SECRET'),
                    'code' => $code,
                    'grant_type' => 'authorization_code',
                    'redirect_uri' => 'http://localhost:8000/auth/twitch/callback',
                ],
            ]);

            $body = json_decode((string)$response->getBody());

            return $body->access_token;
        } catch (\Exception $e) {
            Log::error('Error obteniendo el token de acceso Twitch', [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    public function getUser($accessToken)
    {
        if (!$accessToken) {
            Log::error('Error obteniendo el usuario Twitch, token de acceso no proporcionado');
            return null;
        }

        try {
            $client = new Client([
                'base_uri' => 'https://api.twitch.tv/token',
                'headers' => [
                    'Client-ID' => env('TWITCH_CLIENT_ID'),
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'timeout'  => 2.0,
            ]);

            $response = $client->get('helix/users');

            $body = json_decode((string)$response->getBody());

            return $body->data[0];
        } catch (\Exception $e) {
            Log::error('Error obteniendo el usuario Twitch', [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }
}
