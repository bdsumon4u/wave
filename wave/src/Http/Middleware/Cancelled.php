<?php

namespace Wave\Http\Middleware;

use Closure;
use TCG\Voyager\Models\Role;

class Cancelled
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
        if( auth()->user()->hasRole('cancelled') ){
            return redirect()->route('subscription.cancelled');
        }

        return $next($request);
    }
}
