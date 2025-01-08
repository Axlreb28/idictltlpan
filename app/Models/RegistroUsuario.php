<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class RegistroUsuario extends Model
{
    use HasFactory;

    protected $table = 'registro_usuarios';
    protected $fillable = ['Nombre', 'Apellidos', 'Email', 'DepartamentoID', 'Contraseña'];

    public $timestamps = false;

    protected $hidden = ['Contraseña'];

    /**
     * Validación de los datos de usuario.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validate($data)
    {
        return Validator::make($data, [
            'Nombre' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'Email' => 'required|email|unique:registro_usuarios,Email',
            'DepartamentoID' => 'required|integer',
            'Contraseña' => 'required|string|min:8|confirmed',
        ], [
            'Nombre.required' => 'El campo nombre es obligatorio.',
            'Apellidos.required' => 'El campo apellidos es obligatorio.',
            'Email.required' => 'El campo email es obligatorio.',
            'Email.email' => 'Por favor introduce una dirección de correo válida.',
            'Email.unique' => 'Este correo ya está registrado.',
            'DepartamentoID.required' => 'El campo departamento es obligatorio.',
            'Contraseña.required' => 'El campo contraseña es obligatorio.',
            'Contraseña.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'Contraseña.confirmed' => 'Las contraseñas no coinciden.',
        ]);
    }
}
