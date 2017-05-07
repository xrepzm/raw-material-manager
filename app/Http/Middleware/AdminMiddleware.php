<?php

namespace RawMaterialManager\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth($guard)->guest()) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
