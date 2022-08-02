<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if( Auth::user() && Auth::user()->roles == 'KADIV') {

            return $next($request);
        } 
        else if( Auth::user() && Auth::user()->roles == 'HRD') {
        
            return $next($request);
        }
        else if( Auth::user() && Auth::user()->roles == 'ADMIN') {
        
            return $next($request);
        }
        return redirect('/');
    }
}
