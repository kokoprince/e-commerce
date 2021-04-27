<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class make_blade_tempalet extends Controller
{
    public function ok(){
        $body_2='';
        if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty()){
            $body_2.=' <li style="margin-top: 5px;margin-bottom: 5px;width:100%"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
            <div  class="toast_"style="width:100%;">
                <div class="toast-header">
                <strong class="me-auto">DreamShop</strong>
                <small class="small{{$valu->id}}">{{ $valu->date }}</small>
                </div>
                <div class="toast-body">
                    {{ $valu->content }}
                </div>
            </div></li>';
    }else{
        $body_2.=' <li style="margin-top: 5px;margin-bottom: 5px;width:100%"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
            <div  class="toast_"style="width:100%;">
                <div class="toast-header">
                <strong class="me-auto">DreamShop</strong>
                <small class="small{{$valu->id}}">{{ $valu->date }} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye mov" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                  </svg></small>
                </div>
                <div class="toast-body">
                    {{ $valu->content }}
                </div>
            </div></li>';
    }
    }
}
