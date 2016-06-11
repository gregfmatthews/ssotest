<?php

namespace App\Http\Middleware;


use App\Events\FakeSamlEvent;
use Closure;
use Illuminate\Support\Facades\Auth;


class SamlAuthenticateFake
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard=null)
    {   logger()->info($guard);
        if (Auth::guard($guard)->guest())
        {
            event(new FakeSamlEvent());
        }

        return $next($request);
    }
}
