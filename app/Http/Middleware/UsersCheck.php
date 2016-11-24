<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class UsersCheck
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
        if(Auth::user()->userType === 2){
          return $next($request);
        } elseif (Auth::user()->userType === 3) {
          return $next($request);
        }
        return redirect()->route('welcome');
    }
}