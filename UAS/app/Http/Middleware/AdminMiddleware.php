<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->user()->is_admin == 1) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
