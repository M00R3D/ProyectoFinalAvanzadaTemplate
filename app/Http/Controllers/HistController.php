<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistController extends Controller
{
    public function index()
    {
        return view('hist');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }
}
