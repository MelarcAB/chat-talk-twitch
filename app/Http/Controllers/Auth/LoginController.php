<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;
//twitchapi
use App\Models\TwitchApi;
//user
use App\Models\User;

class LoginController extends Controller
{

    public function redirectToProvider(TwitchApi $twitchApi)
    {
        return redirect($twitchApi->getRedirectUrl());
    }

    public function handleProviderCallback(Request $request, TwitchApi $twitchApi)
    {
        $accessToken = $twitchApi->getAccessToken($request->code);
        $twitchUser = $twitchApi->getUser($accessToken);
        // Encuentra o crea un usuario en la base de datos
        $user = User::firstOrCreate(
            ['twitch_id' => $twitchUser->id],
            [
                'username' => $twitchUser->login,
                'name' => $twitchUser->display_name,
                'img' => $twitchUser->profile_image_url,
            ]
        );
        //Validate if user configuration register exist
        if (!$user->userConfiguration) {
            $user->userConfiguration()->create();
        }
        // Login and remember the user
        Auth::login($user, true);
        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
