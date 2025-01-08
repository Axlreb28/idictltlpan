<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user->hasRole('direccion_grupos_prioritarios')) {
            return redirect()->route('direccion_grupos_prioritarios.menu');
        }

        return $next($request);
    }
}
