<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Enseignant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //pour vérifier si un utilisateur est authentifié en tant qu'enseignant
        if(Auth::guard('enseignant')->check()){
            return $next($request);
        }
        return redirect('enseignant/login');

    }
}
