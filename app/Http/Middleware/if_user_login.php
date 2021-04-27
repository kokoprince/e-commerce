<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class if_user_login
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            return redirect()->back();
        }else{
            return $next($request);
        }
    }
}
