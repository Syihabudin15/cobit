<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboardResponden');
});
Route::get('/pengguna', function () {
    return view('kelolaPengguna');
});
