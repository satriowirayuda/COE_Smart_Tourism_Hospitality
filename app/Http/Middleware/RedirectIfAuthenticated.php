<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            // Redirect the user to the intended page, like dashboard
            return redirect('/dashboard'); // Change this to the route you want to redirect to
        }

        return $next($request);
    }
}


