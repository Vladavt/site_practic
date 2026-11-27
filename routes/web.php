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

Route::get('/colors/create', [ColorController::class, 'create']); 
Route::post('/colors', [ColorController::class, 'store']);        

Route::get('/colors/{id}/edit', [ColorController::class, 'edit']); 
Route::put('/colors/{id}', [ColorController::class, 'update']);    

Route::delete('/colors/{id}', [ColorController::class, 'destroy']); 
Route::get('/brands/create', [BrandController::class, 'create']);
Route::post('/brands', [BrandController::class, 'store']);
Route::get('/brands/{id}/edit', [BrandController::class, 'edit']);
Route::put('/brands/{id}', [BrandController::class, 'update']);
Route::delete('/brands/{id}', [BrandController::class, 'destroy']);

Route::get('/countries/create', [CountryController::class, 'create']);
Route::post('/countries', [CountryController::class, 'store']);
Route::get('/countries/{id}/edit', [CountryController::class, 'edit']);
Route::put('/countries/{id}', [CountryController::class, 'update']);
Route::delete('/countries/{id}', [CountryController::class, 'destroy']);

Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{id}/edit', [CarController::class, 'edit']);
Route::put('/cars/{id}', [CarController::class, 'update']);
Route::delete('/cars/{id}', [CarController::class, 'destroy']);

Route::get('/models/create', [CarModelController::class, 'create']);
Route::post('/models', [CarModelController::class, 'store']);
Route::get('/models/{id}/edit', [CarModelController::class, 'edit']);
Route::put('/models/{id}', [CarModelController::class, 'update']);
Route::delete('/models/{id}', [CarModelController::class, 'destroy']);

Route::get('/transmissions/create', [TransmissionController::class, 'create']);
Route::post('/transmissions', [TransmissionController::class, 'store']);
Route::get('/transmissions/{id}/edit', [TransmissionController::class, 'edit']);
Route::put('/transmissions/{id}', [TransmissionController::class, 'update']);
Route::delete('/transmissions/{id}', [TransmissionController::class, 'destroy']);