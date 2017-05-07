<?php

namespace RawMaterialManager\Http\Middleware;

use Closure;

class AdminRedirectMiddleware
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (auth($guard)->check()) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
