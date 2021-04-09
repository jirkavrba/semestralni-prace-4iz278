<?php

use Illuminate\Support\Facades\Route;
use RootInc\LaravelAzureMiddleware\Azure;

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

Route::get("/login/azure", [Azure::class, "azure"]);
Route::get("/login/azurecallback", [Azure::class, "azurecallback"]);
