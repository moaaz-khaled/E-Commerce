<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role == 'user'){
            return $next($request);
        }
        return redirect('/login');
    }
}

// use Illuminate\Support\Facades\Auth; IN Laravel 11 / 12 =>
