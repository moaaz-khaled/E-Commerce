<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class adminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->roles()->where('role_name', 'Admin')->exists()) {
            return $next($request);
        }
        else{
            return response("انا زهققققققققققققت");
        }
    }
}
