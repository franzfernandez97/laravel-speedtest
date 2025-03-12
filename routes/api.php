<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SpeedTestController;

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/search', [ClientController::class, 'search']);
Route::post('/speedTest', [SpeedTestController::class, 'store']);
Route::get('/speedTest', [SpeedTestController::class, 'index']);