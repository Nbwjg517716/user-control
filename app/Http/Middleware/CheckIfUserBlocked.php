<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // importar o facade Auth
use Symfony\Component\HttpFoundation\Response;

class CheckIfUserBlocked
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->status === 'blocked') {
            Auth::logout();
            return redirect()->route('login')
                ->withErrors(['error' => 'Sua conta foi bloqueada, entre em contato com o administrador']);
        }

        return $next($request);
    }
}
