<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function index()
    {
        return view('medicines');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }

    public function details()
    {
        return view('medicinesDetail'); // Asegúrate de tener esta vista creada
    }

    public function edit()
    {
        return view('medicinesEdit'); // Asegúrate de tener esta vista creada
    }
}
