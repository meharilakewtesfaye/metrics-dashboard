<?php

use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/chart-data', [DashboardController::class, 'getChartData']);