<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }
}
