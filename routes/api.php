<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\CaregiverController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('medicine', MedicineController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('patients', PatientController::class);
Route::apiResource('caregivers', CaregiverController::class);