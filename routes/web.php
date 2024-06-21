<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Authentication Route
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/logout', [AuthController::class, 'handleLogout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/pengguna', function () {
    return view('kelolaPengguna');
})->middleware("auth");
Route::get('/rekapitulasi', function () {
    return view('SistemInformasi');
})->middleware("auth");
