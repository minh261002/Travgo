<?php

use App\Admin\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');