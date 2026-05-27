<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use Illuminate\Support\Facades\Route;

// ROUTE LOGIN
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('auth.login')->middleware('throttle:5,1');
Route::get('/register', [LoginController::class, 'showRegis'])->name('regis');
Route::post('/register', [LoginController::class, 'registration'])->name('auth.regis')->middleware('throttle:5,1');

// ROUTE ADMIN
Route::middleware(['auth', 'isUser:Admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.admin');
});

// ROUTE MEMBER
Route::middleware(['auth', 'isUser:Member'])->group(function () {
    Route::get('/member/dashboard', [MemberDashboardController::class, 'index'])->name('dashboard.member');
});


// ROUTE LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware(('auth'));