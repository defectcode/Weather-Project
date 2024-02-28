<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\Admin\WeatherAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;


Route::post('/weather/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');

Route::get('/weather', [WeatherController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/weather', [WeatherAdminController::class, 'index']);
    Route::get('/weather/{id}/edit', [WeatherAdminController::class, 'edit'])->name('weather.edit');

    Route::put('/weather/{id}', [WeatherAdminController::class, 'update']);
    Route::get('/weather/dashboard', [AdminController::class, 'dashboard']);
});

Route::put('/weather/{id}', [WeatherController::class, 'update'])->middleware('admin');
