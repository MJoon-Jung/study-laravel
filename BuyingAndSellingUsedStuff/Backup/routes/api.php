<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::get('/login', [AuthController::class, "redirectToProvider"])->name('login');
    Route::get('/login/callback', [AuthController::class, "handleProviderCallback"]);
    Route::post('/logout', [AuthController::class, "logout"]);
    Route::get('/refresh', [AuthController::class, "refreshByAccessToken"]);
    Route::get('/refreshh', [AuthController::class, "refreshByRefreshToken"]);
    Route::get('/me', [AuthController::class, "me"]);
});
