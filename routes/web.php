<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\CarModelController;
//a
Route::get('/', function () { 
    return redirect('/cars'); 
});

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brands/{id}', [BrandController::class, 'show']);

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/{id}', [CountryController::class, 'show']);

Route::get('/colors', [ColorController::class, 'index']);
Route::get('/colors/{id}', [ColorController::class, 'show']);

Route::get('/transmissions', [TransmissionController::class, 'index']);
Route::get('/transmissions/{id}', [TransmissionController::class, 'show']);

Route::get('/models', [CarModelController::class, 'index']);
Route::get('/models/{id}', [CarModelController::class, 'show']);