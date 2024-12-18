<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login if unauthenticated
        }

        if (!Auth::user()->hasRole($role)) {
            abort(403, 'Unauthorized action.'); // Return 403 for unauthorized roles
        }

        return $next($request);
    }
}
