<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlarmController extends Controller
{
    // Método para mostrar la lista de alarmas
    public function index()
    {
        return view('alarms');
    }

    
    public function details()
    {
        return view('alarmsDetail'); // Asegúrate de tener esta vista creada
    }

    public function edit()
    {
        return view('alarmsEdit'); // Asegúrate de tener esta vista creada
    }
}
