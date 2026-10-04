<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

oute::get('dashboard',[AdminController::class,'index'])->name('dashboardAdmin');
