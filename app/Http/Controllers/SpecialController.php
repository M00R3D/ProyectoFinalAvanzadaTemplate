<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialController extends Controller
{
    public function index()
    {
        return view('special');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }
}
