<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    //si esta logueado
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return view('main.index');
})->name('index');


//Twitch login
Route::get('auth/twitch', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('twitch.redirect');
Route::get('auth/twitch/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('twitch.callback');
//logout
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//HomeController
Route::controller(App\Http\Controllers\HomeController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/home', 'index')->name('home');
    });
