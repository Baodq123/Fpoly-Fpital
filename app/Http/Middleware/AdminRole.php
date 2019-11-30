<?php

namespace App\Http\Middleware;

use Closure;

class AdminRole
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @return string
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role_id > 0) {
            return $next($request);
        }

        return redirect()->route('forbidden');
    }
}
