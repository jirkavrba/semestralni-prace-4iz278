<?php

use App\Http\Controllers\AuthenticationController;
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

Route::get("/login", [AuthenticationController::class, "login"])->name("login");
Route::get("/login/callback", [AuthenticationController::class, "callback"])->name("login.callback");

Route::get('/', function () {
    return view('welcome');
})->name("index");

Route::get('/home', function () {
    return view('welcome');
})->name("homepage");
