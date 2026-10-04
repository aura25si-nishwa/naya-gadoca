<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('admin', [AdminController::class, 'index'])->name('dashboardAdmin');
