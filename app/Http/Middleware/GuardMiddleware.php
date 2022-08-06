<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards->foreach(function ($guard) use ($request, $next) {
            if ($this->auth->guard($guard)->check()) {
                return $next($request);
            }
        });
        return redirect('/');
    }
}
