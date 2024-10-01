<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KateController;

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route
Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Resource Routes for Buku, Kategori, and Mahasiswa
        Route::resource('bukus', BukuController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('mahasiswa', MahasiswaController::class);

        // Additional routes if needed
    });
});

// Home Route (User)
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('username', [DashboardController::class, 'guest'])->name('username');
Route::get('kate', [KateController::class, 'index'])->name('kategoris.index');
