<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_test extends Controller//event_logout
{
    public function login(Request $R){
        if(Auth::guard('admin')->attempt(['email' => $R->email, 'password' => $R->password])){
            return redirect()->route('wel');
            $R->session()->put('cases_login','admin');
        }elseif(Auth::guard('web')->attempt(['email' => $R->email, 'password' => $R->password])){
            return redirect()->route('wel');
            $R->session()->put('cases_login','guest');
        }else{
            return 'error';
        }
    }
    public function logout(){
            Auth::guard('admin')->logout();
            Auth::guard('web')->logout();
            return redirect()->route('login');
    }
}
