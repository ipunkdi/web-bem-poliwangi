<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardKastratController;
use App\Http\Controllers\DashboardKementerianController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index', ['title' => 'Dashboard']);
})->middleware('auth');

// Dashboard Kastrat
Route::get('/dashboard/kastrats/checkSlug', [DashboardKastratController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/kastrats', DashboardKastratController::class)->middleware('auth');

// Dashboard Kementerian
Route::resource('/dashboard/kementerians', DashboardKementerianController::class)->middleware('auth')->middleware('auth');