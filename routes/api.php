<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;

Route::prefix('models')->controller(CarController::class)->group(function () {
    Route::get('', 'index');
    Route::get('{car}', 'show');
    Route::post('', 'store');
    Route::post('{car}', 'update');
    Route::delete('{car}', 'destroy');
});

Route::prefix('colors')->controller(ColorController::class)->group(function () {
    Route::get('/all', 'index');
    Route::get('{color}', 'show');
    Route::post('/create', 'store');
    Route::post('{color}', 'update');
    Route::delete('{color}', 'destroy');
});
