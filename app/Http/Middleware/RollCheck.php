<?php

namespace App\Http\Middleware;

use Closure;

class RollCheck
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
        //dd(auth()->user()->role()->pluck('id'));
        if (in_array('member', auth()->user()->role->pluck('id')->toArray())) {
            return $next($request);
        } else {
            abort(403, 'Access denied');
        }
    }

}
