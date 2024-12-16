<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\HistController;
use App\Http\Controllers\MedicinesController;

// Route::get('/', function () {
//     return "Hello, this is the homepage!";
// });


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('/homepage', function (Request $request) {
    $email = 'job@mail.com';
    $password = '666';
    $email2 = 'isaias@mail.com';
    $password2 = '12345';
    if ($request->email === $email && $request->password === $password) {
        return redirect('/homepage');
    } else if ($request->email === $email2 && $request->password === $password2) {
        return redirect('/homepage');
    }
    return redirect('/')->with('error', 'Credenciales incorrectas');
});


// Route::get('/homepage', function () {
//     return view('homepage'); 
// })->name('homepage');

// Ruta para la página principal (HOME)
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');  // Para obtener la página
Route::post('/homepage', [HomeController::class, 'handleLogin'])->name('homepage');  // Para procesar el formulario de inicio de sesión


Route::get('/special', [SpecialController::class, 'index'])->name('special');  // Para obtener la página
Route::post('/special', [SpecialController::class, 'handleLogin'])->name('special');  // Para procesar el formulario de inicio de sesión


Route::get('/hist', [HistController::class, 'index'])->name('hist');  // Para obtener la página
Route::post('/hist', [HistController::class, 'handleLogin'])->name('hist');  // Para procesar el formulario de inicio de sesión


Route::get('/medicines', [MedicinesController::class, 'index'])->name('medicines');  // Para obtener la página
Route::get('/medicines/details', [MedicinesController::class, 'details'])->name('medicines/details');
Route::post('/medicines', [MedicinesController::class, 'handleLogin'])->name('medicines');  // Para procesar el formulario de inicio de sesión


// Route::get('/special', [SpecialController::class, 'index'])->name('special');  // Para obtener la página
// Route::post('/special', [SpecialController::class, 'handleLogin'])->name('special');  // Para procesar el formulario de inicio de sesión

