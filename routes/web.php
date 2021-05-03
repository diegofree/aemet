<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stations', [StationController::class, 'index'])->name('stations.index');
Route::get('/stations/{station}', [StationController::class, 'info'])->name('stations.info');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
