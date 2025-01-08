<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnDepartment
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        
        switch ($user->department) {
            case 'Dirección de Atención a Grupos Prioritarios':
                return redirect('/direccion-grupos-prioritarios');
            case 'Departamento de Tecnologías':
                return redirect('/tecnologias');
            default:
                return redirect('/'); // Redirigir a la página principal si no coincide con ningún departamento
        }
    }
}
