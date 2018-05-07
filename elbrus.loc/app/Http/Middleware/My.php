<?php

namespace App\Http\Middleware;

use Closure;

class My
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
        if($request->route('page') != 'pages') {
            return redirect()->route('anula');
            
        }
        return $next($request);
    }
}
