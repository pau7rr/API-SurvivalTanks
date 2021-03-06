<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\AdminAuthController;

use App\Http\Controllers\Administrative\DashboardController;
use App\Http\Controllers\tankController;
use App\Http\Controllers\Administrative\TankEditorController;
use App\Http\Controllers\DevlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTankController;
use App\Http\Controllers\StatsController;

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

// Index Route
Route::get('/', [LoginController::class, 'login'])->middleware('alreadyLoggedIn');

// Auth Routes
Route::post('/check', [AdminAuthController::class, 'check'])->name('auth.check');
Route::get('/logout', [AdminAuthController::class, 'logout']);

// Admin Home Route
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('isLogged');

// CRUD Routes
Route::group(['middleware' => 'isLogged'], function() {
    Route::resources([
        'tanks' => tankController::class,
        'devlogs' => DevlogController::class,
        'users' => UserController::class,
        'usertanks' => UserTankController::class,
    ]);
});


