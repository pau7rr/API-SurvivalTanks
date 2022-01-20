<?php

use App\Http\Controllers\ApiDevlogController;
use App\Http\Controllers\ApiUserController;
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

Route::post('users', [ApiUserController::class, 'store']);

Route::post('/login', [ApiUserController::class, 'login']);

Route::post('/register', [ApiUserController::class, 'register']);

//Route::post('/users', 'UsersController@users')->middleware('auth:api');

//Route::get('/logout', 'UsersController@logout')->middleware('auth:api');



