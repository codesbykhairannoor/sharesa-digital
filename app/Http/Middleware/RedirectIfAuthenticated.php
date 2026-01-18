<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Kalo udah login, langsung lempar ke Dashboard Admin
                // Gak peduli dia siapa, karena website ini cuma punya Admin sekarang.
                return redirect()->route('admin.dashboard');
            }
        }

        return $next($request);
    }
}