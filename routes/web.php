<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, "index"])->name("index");

Route::get("/login", [AuthenticationController::class, "login"])->name("login");
Route::get("/login/callback", [AuthenticationController::class, "callback"])->name("login.callback");
Route::get("/logout", [AuthenticationController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function () {
    Route::get('/home', [HomeController::class, "homepage"])->name("homepage");
});
