<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservasiController;

// Welcome
Route::get('/', function () {
    return view('welcome');
});

// Register
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.process');

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Halaman Admin
Route::get('/admin', function () {
    return view('admin');
})->name('admin.dashboard');

// Halaman Pemilik
Route::get('/owner', function () {
    return view('owner');
})->name('owner.dashboard');

// Halaman Pelanggan
Route::get('/reservasi', function () {
    return view('reservasi');
})->name('pelanggan.reservasi');

// Store reservasi
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');
