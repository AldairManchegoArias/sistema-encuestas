<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Para APIs, no redirigir sino devolver error 401
        if ($request->expectsJson()) {
            return null;
        }

        // Para rutas web, redirigir a login si existe, sino a home
        return route_exists('login') ? route('login') : '/';
    }
}

/**
 * Helper function to check if a route exists
 */
if (!function_exists('route_exists')) {
    function route_exists($name)
    {
        try {
            route($name);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}