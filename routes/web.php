<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GelombangsController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\PesertaPelatihan;
use Illuminate\Support\Facades\Route;

Route::resource('/', WelcomeController::class);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::post('logout', [LoginController::class, 'actionLogout'])->name('logout');

Route::prefix('admin')->middleware(['auth', 'web'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('/user', UserController::class);
    Route::resource('/level', LevelController::class);
    Route::resource('/peserta-pelatihan', PesertaPelatihanController::class);
    Route::post('/peserta-pelatihan/update-status/{id}', [PesertaPelatihanController::class, 'updateStatus']);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/gelombangs', GelombangsController::class);
    Route::post('/gelombangs/update-status/{id}', [GelombangsController::class, 'updateStatus']);
})->middleware('web');
