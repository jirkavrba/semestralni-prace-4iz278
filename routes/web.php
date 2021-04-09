<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/login", function () { return Socialite::driver("azure")->redirect(); })->name("login");
Route::get("/login/callback", function () { dd(Socialite::driver("azure")->user()); });

Route::get('/', function () {
    return view('welcome');
});
