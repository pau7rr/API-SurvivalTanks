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


Route::get('devlogs', [ApiDevlogController::class, 'index']);

//Route::post('users', [ApiUserController::class, 'store']);

Route::post('/login', [ApiUserController::class, 'login']);

Route::post('/register', [ApiUserController::class, 'register']);

Route::get('/users', [ApiUserController::class, 'users'])->middleware('auth:api');

Route::get('/user', [ApiUserController::class, 'user'])->middleware('auth:api');

Route::get('/logout', [ApiUserController::class, 'logout'])->middleware('auth:api');

Route::post('sociallogin/{provider}', [ApiUserController::class, 'socialsignup']);

Route::post('sociallogin', [ApiUserController::class, 'socialLogin']);

Route::post('/usertank', [ApiUserTankController::class, 'getUserTank']);

Route::post('/sumStrength', [ApiUserTankController::class, 'sumStrength']);