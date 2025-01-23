<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\HistController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\InfopageController;
use App\Http\Controllers\AlarmController;
use App\Http\Controllers\UserController;

// web.php
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/login', [HomeController::class, 'handleLogin'])->name('handleLogin');
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
Route::post('/logout', [HomeController::class, 'handleLogout'])->name('logout');
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');  // Para obtener la página
Route::post('/homepage', [HomeController::class, 'handleLogin'])->name('homepage');  // Para procesar el formulario de inicio de sesión

Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Listar todos los usuarios
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Crear un nuevo usuario
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show'); // Mostrar un usuario específico
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update'); // Actualizar un usuario
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Eliminar un usuario


Route::get('/special', [SpecialController::class, 'index'])->name('special');  // Para obtener la página
Route::post('/special', [SpecialController::class, 'handleLogin'])->name('special');  // Para procesar el formulario de inicio de sesión


Route::get('/hist', [HistController::class, 'index'])->name('hist');  // Para obtener la página
Route::post('/hist', [HistController::class, 'handleLogin'])->name('hist');  // Para procesar el formulario de inicio de sesión

Route::get('/patients', [PatientController::class, 'index'])->name('patients');  // Para obtener la página
Route::get('/patients/details', [PatientController::class, 'details'])->name('patients/details');
Route::post('/patients', [PatientController::class, 'handleLogin'])->name('patients');  // Para procesar el formulario de inicio de sesión
Route::get('/patients/edit', [PatientController::class, 'edit'])->name('patients/edit');

Route::get('/infopage', [InfopageController::class, 'index'])->name('infopage');  // Para obtener la página
Route::post('/infopage', [InfopageController::class, 'handleLogin'])->name('infopage');  // Para procesar el formulario de inicio de sesión

Route::get('/medicines', [MedicineController::class, 'index'])->name('medicines');  // Para obtener la página
Route::get('/medicines/details', [MedicineController::class, 'details'])->name('medicines/details');
Route::post('/medicines', [MedicineController::class, 'handleLogin'])->name('medicines');  // Para procesar el formulario de inicio de sesión
Route::get('/medicines/edit', [MedicineController::class, 'edit'])->name('medicines/edit');

Route::get('/alarms', [AlarmController::class, 'index'])->name('alarms');
Route::get('/alarms/details', [AlarmController::class, 'details'])->name('alarms/details');
Route::get('/alarms/edit', [AlarmController::class, 'edit'])->name('alarms/edit');

