<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StationController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('stations', StationController::class)->names('admin.stations');