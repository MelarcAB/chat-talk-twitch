<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.index');
})->name('home');


//Twitch login
Route::get('auth/twitch', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('twitch.redirect');
Route::get('auth/twitch/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('twitch.callback');
