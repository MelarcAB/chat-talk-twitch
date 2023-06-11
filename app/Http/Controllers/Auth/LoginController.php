<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;
//twitchapi
use App\Models\TwitchApi;

class LoginController extends Controller
{



    public function redirectToProvider(TwitchApi $twitchApi)
    {
        return redirect($twitchApi->getRedirectUrl());
    }

    public function handleProviderCallback(Request $request, TwitchApi $twitchApi)
    {
        $accessToken = $twitchApi->getAccessToken($request->code);
        print_r($accessToken);
        exit;
        $user = $twitchApi->getUser($accessToken);

        // la lógica para crear tu usuario va aquí
        // por ejemplo, podrías verificar si el usuario ya existe en la base de datos
        // si no existe, puedes crear una nueva cuenta de usuario con la información obtenida de Twitch

        Auth::login($user, true);
        return redirect(route('home'));
    }
}
