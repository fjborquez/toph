<?php

use App\Http\Controllers\UnitOfMeasurementController;
use Illuminate\Support\Facades\Route;

Route::get('/unit-of-measurement', [UnitOfMeasurementController::class, 'list']);
Route::get('/unit-of-measurement/{id}', [UnitOfMeasurementController::class, 'get']);
