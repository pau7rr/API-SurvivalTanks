<?php

use App\Http\Controllers\ApiDevlogController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiTankController;
use App\Http\Controllers\ApiUserTankController;
use App\Http\Controllers\ApiStatsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


/*******  Auth Endpoints *******/

Route::post('/login', [ApiUserController::class, 'login']);

Route::post('/register', [ApiUserController::class, 'register']);

Route::get('/logout', [ApiUserController::class, 'logout'])->middleware('auth:api');

Route::post('sociallogin/{provider}', [ApiUserController::class, 'socialsignup']);

Route::post('sociallogin', [ApiUserController::class, 'socialLogin']);

/*******  User Endpoints *******/

Route::get('/user', [ApiUserController::class, 'user'])->middleware('auth:api');

Route::get('/users', [ApiUserController::class, 'users'])->middleware('auth:api');

Route::get('user/coins', [ApiUserController::class, 'getCoins'])->middleware('auth:api');

Route::post('user/addCoins', [ApiUserController::class, 'addCoins'])->middleware('auth:api');

Route::put('user/resCoins', [ApiUserController::class, 'resCoins'])->middleware('auth:api');

Route::post('user/send-reset-email', [ApiUserController::class, 'sendResetPasswordEmail']);

Route::post('user/reset-password', [ApiUserController::class, 'resetPassword']);

Route::put('user/updateUsername', [ApiUserController::class, 'updateUsername'])->middleware('auth:api');

Route::put('user/updatePassword', [ApiUserController::class, 'updatePassword'])->middleware('auth:api');

/*******  Devlog Endpoints *******/

Route::get('devlogs', [ApiDevlogController::class, 'index']);

/*******  UserTank Endpoints *******/

Route::get('/usertank', [ApiUserTankController::class, 'getUserTank'])->middleware('auth:api');

Route::put('/updateSkin', [ApiUserTankController::class, 'updateSkin'])->middleware('auth:api');

Route::put('/sumStrength', [ApiUserTankController::class, 'sumStrength'])->middleware('auth:api');

Route::put('/sumHealth', [ApiUserTankController::class, 'sumHealth'])->middleware('auth:api');

Route::put('/sumSpeed', [ApiUserTankController::class, 'sumSpeed'])->middleware('auth:api');

Route::put('/sumBombs', [ApiUserTankController::class, 'sumBomb'])->middleware('auth:api');

Route::put('/sumRegen', [ApiUserTankController::class, 'sumRegeneration'])->middleware('auth:api');

/*******  User Stats Endpoints *******/

Route::post('/updateSoloStats', [ApiStatsController::class, 'updateSoloStats']);

Route::post('/updateMultiplayerStats', [ApiStatsController::class, 'updateMultiplayerStats']);

/*******  Game Stats Endpoints *******/

Route::get('/roundsRanking', [ApiStatsController::class, 'getRoundsRanking']);

Route::get('/getAllTanks', [ApiTankController::class, 'getAllTanks']);