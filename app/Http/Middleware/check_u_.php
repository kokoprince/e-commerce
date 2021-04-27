<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class check_u_
{
    public function handle($request, Closure $next)
    {
        if(Auth::guard('web')->check()||Auth::guard('admin')->check()){
            session()->put('eror','1');
            return $next($request);
        }else{
            session()->put('eror','0');
            return $next($request);
        }
    }
}
