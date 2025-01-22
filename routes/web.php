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

// Route::get('/', function () {
//     return "Hello, this is the homepage!";
// });


// web.php
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('/login', [HomeController::class, 'handleLogin'])->name('handleLogin');
// Ruta para manejar el inicio de sesión

// Ruta para la página de inicio
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');

// Ruta para cerrar sesión
Route::post('/logout', [HomeController::class, 'handleLogout'])->name('logout');



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


Route::get('/medicines', [MedicineController::class, 'index'])->name('medicines');  // Para obtener la página
Route::get('/medicines/details', [MedicineController::class, 'details'])->name('medicines/details');
Route::post('/medicines', [MedicineController::class, 'handleLogin'])->name('medicines');  // Para procesar el formulario de inicio de sesión
Route::get('/medicines/edit', [MedicineController::class, 'edit'])->name('medicines/edit');

Route::get('/patients', [PatientController::class, 'index'])->name('patients');  // Para obtener la página
Route::get('/patients/details', [PatientController::class, 'details'])->name('patients/details');
Route::post('/patients', [PatientController::class, 'handleLogin'])->name('patients');  // Para procesar el formulario de inicio de sesión
Route::get('/patients/edit', [PatientController::class, 'edit'])->name('patients/edit');

Route::get('/infopage', [InfopageController::class, 'index'])->name('infopage');  // Para obtener la página
Route::post('/infopage', [InfopageController::class, 'handleLogin'])->name('infopage');  // Para procesar el formulario de inicio de sesión

// Ruta para ver las alarmas
Route::get('/alarms', [AlarmController::class, 'index'])->name('alarms');
Route::get('/alarms/details', [AlarmController::class, 'details'])->name('alarms/details');
Route::get('/alarms/edit', [AlarmController::class, 'edit'])->name('alarms/edit');


// Route::get('/special', [SpecialController::class, 'index'])->name('special');  // Para obtener la página
// Route::post('/special', [SpecialController::class, 'handleLogin'])->name('special');  // Para procesar el formulario de inicio de sesión

