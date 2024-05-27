<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                return $next($request);
            } else {
                // Redirect non-admin authenticated users to the home page
                return redirect()->route('dashboard')->with('error', 'You do not have admin access.');
            }
        }

        // Redirect unauthenticated users to the login page
        return redirect()->route('login')->with('error', 'Please login first.');
    }
}
