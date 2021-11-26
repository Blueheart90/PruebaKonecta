<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Conprobamos que el user este con una session activa y que tenga el rol de admin
        if (auth()->check() && auth()->user()->role->id == 1) {
            # code...
            return $next($request);
        }
        return redirect()->route('noautorizado');
    }
}
