<?php

namespace App\Http\Controllers;

use App\Models\RegistroUsuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Asegúrate que esta vista esté creada
    }

    public function register(Request $request)
    {
        // Validar los datos usando el método que has definido en el modelo
        $validated = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'Email' => 'required|email|unique:registro_usuarios,Email',
            'DepartamentoID' => 'required|integer',
            'Contraseña' => 'required|string|min:8|confirmed',
        ]);

        // Crear nuevo registro de usuario con los datos validados
        $usuario = RegistroUsuario::create([
            'Nombre' => $validated['Nombre'],
            'Apellidos' => $validated['Apellidos'],
            'Email' => $validated['Email'],
            'DepartamentoID' => $validated['DepartamentoID'],
            'Contraseña' => bcrypt($validated['Contraseña']), // Encriptar la contraseña
        ]);

        return redirect()->route('login')->with('status', 'Registro exitoso, por favor inicia sesión.');
    }
}
