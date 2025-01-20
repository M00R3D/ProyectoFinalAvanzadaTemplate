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
}
