<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/metrics/data', [DashboardController::class, 'getMetricsData'])->name('metrics.data');
Route::post('/metrics/filter', [DashboardController::class, 'filter'])->name('metrics.filter');