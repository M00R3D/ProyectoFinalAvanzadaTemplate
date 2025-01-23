<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Support\Facades\Hash; // Para usar la función Hash::check
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
        // Validar que el correo y la contraseña sean proporcionados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar el usuario en la base de datos
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Guardar el nombre de usuario en la sesión
            $request->session()->put('user', $user->first_name . ' ' . $user->last_name);
            
            // Redirigir a la página de inicio después de un inicio de sesión exitoso
            return redirect()->route('homepage')->with('success', 'Inicio de sesión exitoso');
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
