<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmpty
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
        if($request->username == ''){
            return redirect('/post/all');
        }
        return $next($request);
    }
}
