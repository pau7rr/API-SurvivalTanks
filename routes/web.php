<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Administrative\DashboardController;
use App\Http\Controllers\Administrative\TankEditorController;
use App\Http\Controllers\DevlogController;

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

// Administrative Routes
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('isLogged');
Route::get('/tankEditor', [TankEditorController::class, 'tankEditor'])->middleware('isLogged');
Route::resource('/devlogs', DevlogController::class)->middleware('isLogged');

