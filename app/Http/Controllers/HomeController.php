<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Mostrar la página de inicio solo si el usuario está autenticado
    public function index(Request $request)
    {
        // Verificar si el usuario está autenticado
        if ($request->session()->has('user')) {
            return view('homepage'); // Mostrar la página de inicio si el usuario está autenticado
        }

        // Si no está autenticado, redirigir a la página de inicio de sesión
        return redirect('/')->with('error', 'Por favor, inicie sesión.');
    }

    // Manejar el inicio de sesión y validar las credenciales
    public function handleLogin(Request $request)
    {
        // Credenciales de prueba (puedes reemplazar esto por una validación real)
        $credentials = [
            ['email' => 'job@mail.com', 'password' => '666', 'user' => 'Job Moore'],
            ['email' => 'isaias@mail.com', 'password' => '12345', 'user' => 'Isaias']
        ];

        // Verificar las credenciales ingresadas
        foreach ($credentials as $credential) {
            if ($request->email === $credential['email'] && $request->password === $credential['password']) {
                // Guardar el nombre de usuario en la sesión
                $request->session()->put('user', $credential['user']);
                
                // Redirigir a la página de inicio después de un inicio de sesión exitoso
                return redirect()->route('homepage')->with('success', 'Inicio de sesión exitoso');
            }
        }

        // Si las credenciales no coinciden, redirigir a la página de inicio de sesión con un mensaje de error
        return redirect('/')->with('error', 'Credenciales incorrectas');
    }

    // Cerrar sesión
    public function handleLogout(Request $request)
    {
        $request->session()->forget('user'); // Eliminar el usuario de la sesión
        return redirect('/')->with('success', 'Has cerrado sesión correctamente.');
    }
}
