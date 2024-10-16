<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// BACKEND ROUTERS
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');

// USEr
Route::get('user/index', [UserController::class, 'index'])->name('user.index')->middleware('admin');

Route::get('login', [AuthController::class, 'login'])->name('auth.login')->middleware('checklogin');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('admin', [AuthController::class, 'admin'])->name('auth.admin');
