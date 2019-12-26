<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Roles
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
        if(Auth::user()->role == 'teacher'){
            return redirect('/teacher');
        }else if(Auth::user()->role == 'student'){
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
