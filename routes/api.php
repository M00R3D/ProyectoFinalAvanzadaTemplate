<?php

use App\Http\Controllers\MedicineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('medicine', MedicineController::class);
