<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

// Home
Route::get('/', [BiodataController::class, 'index']);

// Komentar
Route::get('/komentar', [BiodataController::class, 'komentar']);

// Dashboard
Route::get('/dashboarduser', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboardbiodata', [DashboardController::class, 'dashboardbiodata'])->middleware('auth');
Route::post('/caribiodata', [DashboardController::class, 'caribiodata'])->middleware('auth');
Route::get('/dashboardprovinsi', [DashboardController::class, 'dashboardprovinsi'])->middleware('auth');

// LoginLogout - register + CRUD User
Route::resource('login', LoginController::class);
Route::post('/logincek', [LoginController::class, 'validasiLogin']); // Memvalidasi Login
Route::post('/logout', [LoginController::class, 'logout']); // Logout

// CRUD ABOUT : Berisi Biodata
Route::resource('about', AboutController::class);
