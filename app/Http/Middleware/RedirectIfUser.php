<?php

namespace App\Http\Middleware;

use Closure;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Support\Facades\Auth;
class RedirectIfUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::user()->hasRole('user')) {
            abort(404, 'message');
        }

        return $next($request);
    }
}
