<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DireccionGruposPrioritariosController;

// Redirección inicial
Route::get('/', function () {
    return auth()->check() ? redirect()->route('menu') : redirect()->route('login');
});

// Rutas de autenticación
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login'); // Ruta general de login
    Route::post('/login', 'loginWithDepartment'); // Manejar POST para login general
    Route::get('/login/{departmentID}', 'showLoginForm')->name('login.department'); // Ruta para el login con departamento
    Route::post('/login/{departmentID}', 'loginWithDepartment'); // Manejar POST para login con departamento
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout')->name('logout');
});

// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');
    Route::get('/direccion_grupos_prioritarios/menu', [DireccionGruposPrioritariosController::class, 'menu'])->name('direccion_grupos_prioritarios.menu');
    
    // Lógica para otros departamentos, ejemplo:
    Route::get('/otro_departamento/menu', function() {
        return view('menu.otro_departamento');
    })->name('otro.departamento.menu');
    
    // Agregar más rutas específicas para cada departamento que necesites
});
