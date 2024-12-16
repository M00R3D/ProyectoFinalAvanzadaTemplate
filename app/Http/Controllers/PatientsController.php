<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('patients');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }

    public function details()
    {
        return view('patientsDetail'); // Asegúrate de tener esta vista creada
    }
}
