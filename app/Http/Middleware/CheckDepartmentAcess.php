<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckDepartmentAccess
{
    /**
     * Verificar si el usuario tiene acceso al departamento.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param int $departmentID
     * @return mixed
     */
    public function handle($request, Closure $next, $departmentID)
    {
        $user = Auth::user();
        
        if ($user->DepartamentoID == $departmentID) {
            return $next($request);
        }

        return redirect('login')->withErrors(['error' => 'No tienes acceso a este departamento.']);
    }
}
