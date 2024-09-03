<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (auth()->user() && in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'You do not have access to this section.');
    }
}
