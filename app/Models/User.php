<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',    // Nombre del usuario
        'last_name',     // Apellido del usuario
        'email',         // Correo electrónico
        'username',      // Nombre de usuario
        'password',      // Contraseña (hashed)
        'department_id', // ID del departamento al que pertenece el usuario
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',       // Oculta la contraseña
        'remember_token', // Token de "recordar sesión"
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Convierte la fecha de verificación de email
        'password' => 'hashed',            // Asegura que la contraseña esté encriptada
    ];

    /**
     * Relationship with the Department model.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
