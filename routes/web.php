<?php

use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

//Page Route
Route::get('/', [DashboardController::class, 'Dashboard']);

/* Module Route */

Route::resource('module', ModuleController::class);
Route::resource('permission', PermissionController::class);
