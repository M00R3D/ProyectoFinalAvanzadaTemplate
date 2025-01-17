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
        // Credenciales de prueba
        $email = 'job@mail.com';
        $password = '666';
        $email2 = 'isaias@mail.com';
        $password2 = '12345';
    
        // Validación de credenciales
        if ($request->email === $email && $request->password === $password) {
            return redirect()->route('homepage')->with('success', 'Inicio de sesión exitoso');
        } elseif ($request->email === $email2 && $request->password === $password2) {
            return redirect()->route('homepage')->with('success', 'Inicio de sesión exitoso');
        }
    
        // Credenciales incorrectas
        return redirect()->route('welcome')->with('error', 'Credenciales incorrectas');
    }
    
}
