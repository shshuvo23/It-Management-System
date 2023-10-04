<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next ,$userType): Response
    {
        // Check the user's usertype
        if (auth()->check() && auth()->user()->usertype == $userType) {
            return $next($request);
        }

        return abort(403); // Return a 403 Forbidden response for unauthorized access
    }
}
