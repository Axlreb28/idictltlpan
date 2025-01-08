<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Department;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function showLoginForm($departmentID = null)
    {
        return view('auth.login', compact('departmentID'));
    }
    
    public function loginWithDepartment(Request $request, $departmentID = null)
    {
        // Validación de datos de entrada
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('username', 'password');
        
        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($departmentID !== null && $user->department->id == $departmentID) {
                // Redirigir al menú específico del departamento
                switch ($departmentID) {
                    case 1: // ID de "Dirección de Atención a Grupos Prioritarios"
                        return redirect()->route('direccion_grupos_prioritarios.menu');
                    case 2: // ID de "Otro Departamento"
                        return redirect()->route('otro.departamento.menu');
                    // Agregar más casos según sea necesario
                    default:
                        return redirect()->route('menu'); // Redirección por defecto
                }
            } else {
                // Redirigir al menú general si no hay `departmentID` o no coincide
                return redirect()->route('menu');
            }
        }
    
        return back()->withErrors(['username' => 'Credenciales no válidas'])->withInput();
    }
    

    public function showRegistrationForm()
    {
        $departments = Department::all();
        return view('auth.register', compact('departments'));
    }

    public function register(Request $request)
    {
        // Validación de datos de entrada
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'department_id' => 'required|exists:departments,id',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|confirmed',
        ]);

        // Crear nuevo usuario
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->department_id = $request->department_id;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();

        // Asignar rol basado en el departamento si es necesario
        if ($request->department_id == 1) { // ID de "Direccion de Atención a Grupos Prioritarios"
            $user->assignRole('direccion_grupos_prioritarios');
        }
        // Añadir lógica para otros departamentos según sea necesario

        // Redirigir al login después de un registro exitoso
        return redirect()->route('login')->with('status', 'Registro exitoso, por favor inicia sesión.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
