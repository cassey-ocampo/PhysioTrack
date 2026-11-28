<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// PhysioTrack measurement API
Route::post('/measurements', [MeasurementController::class, 'store']);

?>