<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('cars', CarController::class)->except(['update']);
Route::get('/colors', [ColorController::class, 'index']);
