<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliceOfficerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FineController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/validate-police-officer', [PoliceOfficerController::class, 'validateOfficer']);
Route::post('/signup', [PoliceOfficerController::class, 'signUp']);

Route::post('/driver/details', [DriverController::class, 'getDriverDetails']);
Route::post('/driver/fines', [DriverController::class, 'getDriverFines']);
Route::post('/fine/save', [FineController::class, 'saveFine']);
Route::post('/fines/filter', [FineController::class, 'getFinesByDateAndOfficer']);

