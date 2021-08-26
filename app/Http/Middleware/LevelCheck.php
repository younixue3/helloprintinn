<?php

namespace App\Http\Middleware;

use Closure;

class LevelCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->level != 'admin') {
            return redirect('dashboard');
        }
        return $next($request);
    }
}
