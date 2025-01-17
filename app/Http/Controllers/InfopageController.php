<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfopageController extends Controller
{
    public function index()
    {
        return view('infopage');
    }

    public function handleLogin(Request $request)
    {
        // Lógica de inicio de sesión
    }
}
