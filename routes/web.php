<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SistemInformasiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Authentication Route
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/logout', [AuthController::class, 'handleLogout'])->middleware('auth');

Route::get('/dashboard', function () {
    if(Auth::user()->role === "AUDITOR"){
        return view('dashboard');
    }else{
        return view('dashboardResponden');
    }
})->middleware('auth');

// User Route
Route::get('/pengguna', function () {
    return view('kelolaPengguna');
})->middleware("auth");

// Kuesioner Route
Route::get('/kuesioner', function () {
    return view('Kuesioner');
})->middleware("auth");

// Rekapitulasi Route
Route::get('/rekapitulasi', [SistemInformasiController::class, "index"])->middleware("auth");
Route::post('/rekapitulasi', [SistemInformasiController::class, "create"])->middleware("auth");
