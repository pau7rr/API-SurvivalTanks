<?php

use App\Http\Controllers\ApiDevlogController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiUserTankController;
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


// User Endpoints

Route::post('/login', [ApiUserController::class, 'login']);

Route::post('/register', [ApiUserController::class, 'register']);

Route::get('/users', [ApiUserController::class, 'users'])->middleware('auth:api');

Route::get('/user', [ApiUserController::class, 'user'])->middleware('auth:api');

Route::get('/logout', [ApiUserController::class, 'logout'])->middleware('auth:api');

Route::post('sociallogin/{provider}', [ApiUserController::class, 'socialsignup']);

Route::post('sociallogin', [ApiUserController::class, 'socialLogin']);

Route::get('user/coins', [ApiUserController::class, 'getCoins'])->middleware('auth:api');

Route::put('user/addCoins', [ApiUserController::class, 'addCoins'])->middleware('auth:api');

Route::put('user/resCoins', [ApiUserController::class, 'resCoins'])->middleware('auth:api');

// Devlogs Endpoints

Route::get('devlogs', [ApiDevlogController::class, 'index']);

// UserTank Endpoints

Route::get('/usertank', [ApiUserTankController::class, 'getUserTank'])->middleware('auth:api');

Route::put('/sumStrength', [ApiUserTankController::class, 'sumStrength']);

Route::put('/sumHealth', [ApiUserTankController::class, 'sumHealth']);

Route::put('/sumSpeed', [ApiUserTankController::class, 'sumSpeed']);