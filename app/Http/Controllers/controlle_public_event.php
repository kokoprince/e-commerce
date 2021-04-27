<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\between_user_and_order;
use App\guest;
use App\books;
use App\box_complaints;
use App\clothes;
use App\computers;
use App\cars;
use App\cart;
use App\comments;
use App\Events\delete_comment;
use App\Events\edit_comment;
use App\Events\list_ms;
use App\Events\see_comment;
use App\Events\send_notifi;
use App\Events\who_do_order;
use App\product_love;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\product_end_qun;
use App\see_notification;
use App\notification;
use Illuminate\Support\Facades\Hash;

class controlle_public_event extends Controller
{
    public function check_comments(Request $R){
        if(session()->get('the_pro') == 'cars'){
            $body='';
            foreach(comments::where('id_cars',session()->get('id_pro'))->get() as $key){
                $body.='  <div class="panel-body coment'.$key->id.'">
                <div class="media-block">
                <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="'.DB::table('the_guest')->find($key->id_user)->images.'"></a>
                    <div class="media-body" id="body_com'.$key->id.'">
                        <div class="mar-btm tutch_event">
                            <a class="btn-link text-semibold media-heading box-inline "> '.DB::table('the_guest')->find($key->id_user)->name.' </a>';
                            if(Auth::check() && DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id){
                            $body.='<input type="hidden" class="id_sele" value="">
                                <span style="cursor: pointer" >'. '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                        <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>' . '</span>';
                            }
                            $body.=' <p class="text-sm text-muted">'.$key->date.'</p>
                        </div>
                        <p class=comment_is_here'.$key->id.'>'.$key->text_comment.'</p>
                        <hr>
                    </div>
                </div>
            </div>';
            }
            return response()->json($body);
        }
        if(session()->get('the_pro') == 'books'){
            $body='';
            foreach(comments::where('id_books',session()->get('id_pro'))->get() as $key){
                $body.='  <div class="panel-body coment'.$key->id.'">
                <div class="media-block">
                <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="'.DB::table('the_guest')->find($key->id_user)->images.'"></a>
                    <div class="media-body" id="body_com'.$key->id.'">
                        <div class="mar-btm tutch_event">
                            <a class="btn-link text-semibold media-heading box-inline "> '.DB::table('the_guest')->find($key->id_user)->name.' </a>';
                            if(Auth::check() && DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id){
                            $body.='<input type="hidden" class="id_sele" value="">
                                <span style="cursor: pointer" >'. '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                        <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>' . '</span>';
                            }
                            $body.=' <p class="text-sm text-muted">'.$key->date.'</p>
                        </div>
                        <p class=comment_is_here'.$key->id.'>'.$key->text_comment.'</p>
                        <hr>
                    </div>
                </div>
            </div>';
            }
            return response()->json($body);
        }
        if(session()->get('the_pro') == 'clothes'){
            $body='';
            foreach(comments::where('id_clothes',session()->get('id_pro'))->get() as $key){
                $body.='  <div class="panel-body coment'.$key->id.'">
                <div class="media-block">
                <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="'.DB::table('the_guest')->find($key->id_user)->images.'"></a>
                    <div class="media-body" id="body_com'.$key->id.'">
                        <div class="mar-btm tutch_event">
                            <a class="btn-link text-semibold media-heading box-inline "> '.DB::table('the_guest')->find($key->id_user)->name.' </a>';
                            if(Auth::check() && DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id){
                            $body.='<input type="hidden" class="id_sele" value="">
                                <span style="cursor: pointer" >'. '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                        <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>' . '</span>';
                            }
                            $body.=' <p class="text-sm text-muted">'.$key->date.'</p>
                        </div>
                        <p class=comment_is_here'.$key->id.'>'.$key->text_comment.'</p>
                        <hr>
                    </div>
                </div>
            </div>';
            }
            return response()->json($body);
        }
        if(session()->get('the_pro') == 'computers'){
            $body='';
            foreach(comments::where('id_computers',session()->get('id_pro'))->get() as $key){
                $body.='  <div class="panel-body coment'.$key->id.'">
                <div class="media-block">
                <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="'.DB::table('the_guest')->find($key->id_user)->images.'"></a>
                    <div class="media-body" id="body_com'.$key->id.'">
                        <div class="mar-btm tutch_event">
                            <a class="btn-link text-semibold media-heading box-inline "> '.DB::table('the_guest')->find($key->id_user)->name.' </a>';
                            if(Auth::check() && DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id){
                            $body.='<input type="hidden" class="id_sele" value="">
                                <span style="cursor: pointer" >'. '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                        <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>' . '</span>';
                            }
                            $body.=' <p class="text-sm text-muted">'.$key->date.'</p>
                        </div>
                        <p class=comment_is_here'.$key->id.'>'.$key->text_comment.'</p>
                        <hr>
                    </div>
                </div>
            </div>';
            }
            return response()->json($body);
        }
    }
    public function edit_comment(Request $R){
        return response()->json(comments::find($R->id)->text_comment);
    }
    public function select_user_ms(Request $R){
        $body='';
        $R->session()->put('user',$R->id_selected);
        foreach(box_complaints::where('id_user',$R->id_selected)->get() as $key){
            if($key->id_admin != null){
                if($key->text_message != null){
                $body.='<div class="peers fxw-nw">
                <div class="peer mR-20">
                    <img class="w-2r bdrs-50p" src="'.DB::table('the_guest')->find($key->id_user)->images .'" alt="">
                </div>
                <div class="peer peer-greed">
                    <div class="layers ai-fs gapY-5">

                        <div class="layer">
                            <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10">
                                    <small>'.$key->date.'</small>
                                </div>
                                <div class="peer-greed">
                                    <span>'.$key->text_message.'</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
        }if($key->reply_message != null){
            $body.='
            <!-- Chat Conversation -->
            <div class="peers fxw-nw ai-fe">

                <div class="peer peer-greed ord-0">
                    <div class="layers ai-fe gapY-10">
                        <div class="layer">
                            <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer-greed mR-10">
                                    <span>'.$key->reply_message .'</span>
                                </div>
                                <br>
                                <div class="peer ">
                                    <small>'.$key->reply_date.'</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>';
        }
            }else{
                $body.='<div class="peers fxw-nw">
                <div class="peer mR-20">
                    <img class="w-2r bdrs-50p" src="'.DB::table('the_guest')->find($key->id_user)->images .'" alt="">
                </div>
                <div class="peer peer-greed">
                    <div class="layers ai-fs gapY-5">

                        <div class="layer">
                            <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10">
                                    <small>'.$key->date.'</small>
                                </div>
                                <div class="peer-greed">
                                    <span>'.$key->text_message.'</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
        }
        }
        return response()->json(['ms'=>$body,'name'=>guest::find($R->id_selected)->name,'img'=>guest::find($R->id_selected)->images]);
    }
    public function send_ms_(Request $R)
    {
        if(Auth::guard('web')->check()){
            $R->session()->put('user_aft',Auth::user()->id);
            box_complaints::insert([
                'id_user'=>Auth::user()->id,
                'text_message'=>$R->text_ms,
                'date'=>now()
            ]);
        }elseif(Auth::guard('admin')->check()){
            $R->session()->put('admin',Auth::guard('admin')->user()->id);
            if(collect(box_complaints::where([['id_user',session()->get('user') ?? session()->get('user_aft')],['id_admin',null]])->get())->isEmpty()){
              // $id_ = collect(DB::select('SELECT * FROM `box_complaints` WHERE `box_complaints`.`id_user` = '.session()->get('user') ?? session()->get('user_aft').' ORDER BY `id` DESC'))->max('id');
                 box_complaints::insert([
                    'id_user'=>session()->get('user') ?? session()->get('user_aft'),
                    'id_admin'=>Auth::guard('admin')->user()->id,
                    'text_message'=>null,
                    'reply_message'=>$R->text_ms,
                    'date'=>null,
                    'reply_date'=>now()
                ]);
            }else{
                foreach(box_complaints::where([['id_user',session()->get('user') ?? session()->get('user_aft')],['id_admin',null]])->get() as $key){
                    $after_select_user = box_complaints::find($key->id);
                    $after_select_user->update([
                        'id_admin'=>Auth::guard('admin')->user()->id
                    ]);
                }
               $id_ = collect(DB::select('SELECT * FROM `box_complaints` WHERE `box_complaints`.`id_user` = '.session()->get('user') ?? session()->get('user_aft').' ORDER BY `id` DESC'))->max('id');
               box_complaints::find($id_)->update([
                'reply_message'=>$R->text_ms,
                'reply_date'=>now()
                ]);;
            }
        }
        broadcast(new list_ms('Done'))->toOthers();
    }
    public function list_ms()
    {
        $body='';
        foreach(box_complaints::where('id_user',session()->get('user') ?? session()->get('user_aft'))->get() as $key){
            if($key->id_admin != null){
                if($key->text_message != null){
                $body.='<div class="peers fxw-nw">
                <div class="peer mR-20">
                    <img class="w-2r bdrs-50p" src="'.DB::table('the_guest')->find($key->id_user)->images .'" alt="">
                </div>
                <div class="peer peer-greed">
                    <div class="layers ai-fs gapY-5">

                        <div class="layer">
                            <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10">
                                    <small>'.$key->date.'</small>
                                </div>
                                <div class="peer-greed">
                                    <span>'.$key->text_message.'</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
        }if($key->reply_message != null){
            $body.='
            <!-- Chat Conversation -->
            <div class="peers fxw-nw ai-fe">

                <div class="peer peer-greed ord-0">
                    <div class="layers ai-fe gapY-10">
                        <div class="layer">
                            <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer-greed mR-10">
                                    <span>'.$key->reply_message .'</span>
                                </div>
                                <br>
                                <div class="peer ">
                                    <small>'.$key->reply_date.'</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>';
        }
            }else{
                $body.='<div class="peers fxw-nw">
                <div class="peer mR-20">
                    <img class="w-2r bdrs-50p" src="'.DB::table('the_guest')->find($key->id_user)->images .'" alt="">
                </div>
                <div class="peer peer-greed">
                    <div class="layers ai-fs gapY-5">

                        <div class="layer">
                            <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10">
                                    <small>'.$key->date.'</small>
                                </div>
                                <div class="peer-greed">
                                    <span>'.$key->text_message.'</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
        }
        }
        $person='';
        foreach(DB::select("SELECT DISTINCT `box_complaints`.`id_user` FROM `box_complaints` WHERE `id_admin` IS NULL ORDER BY `box_complaints`.`id_user` ASC") as $key){
                $person .='<li><a class="dropdown-item select_user" href="" id="use'.$key->id_user.'" id_u="'.$key->id_user.'"><img class="w-2r bdrs-50p" src="'. DB::table('the_guest')->find($key->id_user)->images.'" alt="">'.DB::table('the_guest')->find($key->id_user)->name.'</a> <span class="number_ms_se">'.collect(DB::table("box_complaints")->where([['id_user',$key->id_user],['id_admin',null]])->get())->count().'</span></li>';
        }
        $datr=collect(DB::select("SELECT DISTINCT `box_complaints`.`id_user` FROM `box_complaints` WHERE `id_admin` IS NULL ORDER BY `box_complaints`.`id_user` ASC"))->count();
        return response()->json(['ms'=>$body,'person'=>$person,'nom'=>$datr]);
    }
    public function remove_pro(Request $R){
        #code.
    }
    public function payments(Request $R){
        $charg = Stripe::charges()->create([
         'currency'=>'USD',
         'source'=>$R->stripeToken,
         'amount'=>$R->price,
         'description'=>'the payment is successfully'
        ]);
        $R->session()->put('case_pay',null);
        if($charg['id']){
            foreach(DB::table("cars_shopping")->where('user_id',Auth::user()->id)->get(['id','pro_car_id','pro_clothe_id','pro_book_id','pro_computer_id','number_pro','total_price']) as $key){
                if($key->pro_car_id != null){
                    DB::table("orders")->insert([
                        'id_users'=>Auth::user()->id,
                        'id_cars'=>$key->pro_car_id,
                        'Quantity'=>$key->number_pro,
                        'total_price'=>$key->total_price,
                        'date_time'=>now(),
                        'payment_case'=>'Wait'
                    ]);
                }
                elseif($key->pro_clothe_id != null){
                    DB::table("orders")->insert([
                        'id_users'=>Auth::user()->id,
                        'id_clothes'=>$key->pro_clothe_id,
                        'Quantity'=>$key->number_pro,
                        'total_price'=>$key->total_price,
                        'date_time'=>now(),
                        'payment_case'=>'Wait'
                    ]);
                }
                elseif($key->pro_book_id != null){
                    DB::table("orders")->insert([
                        'id_users'=>Auth::user()->id,
                        'id_books'=>$key->pro_book_id,
                        'Quantity'=>$key->number_pro,
                        'total_price'=>$key->total_price,
                        'date_time'=>now(),
                        'payment_case'=>'Wait'
                    ]);
                }
                elseif($key->pro_computer_id != null){
                    DB::table("orders")->insert([
                        'id_users'=>Auth::user()->id,
                        'id_computers'=>$key->pro_computer_id,
                        'Quantity'=>$key->number_pro,
                        'total_price'=>$key->total_price,
                        'date_time'=>now(),
                        'payment_case'=>'Wait'
                    ]);
                }
                cart::find($key->id)->delete();
            }
            $R->session()->put('case_pay','the payment is successfully');
            return redirect()->back();
        }else{
            $R->session()->put('case_pay','There is a problem with the payment');
            return redirect()->back();
        }
    }

	public function delete_prp_cart(Request $R)
	{
        return response()->json(cart::find($R->id)->delete());
    }
    public function plus_amount_cart(Request $R){
        cart::find($R->id)->update([
            'number_pro'=>$R->quant,
            'total_price'=>$R->total
        ]);
    }
    public function minus_amount_cart(Request $R){
        cart::find($R->id)->update([
            'number_pro'=>$R->quant,
            'total_price'=>$R->total
        ]);
    }
    public function all_amount_cart(){
        $total=collect(DB::table("cars_shopping")->where('user_id',Auth::user()->id??'')->get('total_price'))->sum('total_price');
        return response()->json($total);
    }
#------------------------------------- this code for add order ------------------------------
	public function add_order_r(Request $R)
	{
        if($R->value == null && $R->value >= 0 && $R->value == ' ' && $R->value == 0){
            $this->error('Message');
            broadcast(new who_do_order('error'))->toOthers();
        }else{
            if($R->namet == 'cars')
            {
                if(collect(product_end_qun::where('id_cars',$R->idp)->get())->isEmpty()){
                    product_end_qun::insert([
                        'id_cars'=>$R->idp,
                        'required_quantity'=>$R->value,
                        'date'=>now()
                    ]);
                }else{
                    foreach(product_end_qun::where('id_cars',$R->idp)->get() as $ky){
                        $nam1=(int)$ky->required_quantity;
                        $nam2=(int)$R->value;
                        product_end_qun::find($ky->id)->update(['required_quantity'=>$nam1+$nam2]);
                    }
                }
                if(collect(between_user_and_order::where([['id_user',auth::user()->id],['id_cars',$R->idp]])->get())->isEmpty()){
                    foreach(product_end_qun::where('id_cars',$R->idp)->get() as $val){
                        between_user_and_order::insert([
                            'id_user'=>auth::user()->id,
                            'id_cars'=>$R->idp,
                            'quantity'=>$R->value,
                            'link_tabel'=>$val->id
                        ]);
                    }
                }else{
                    foreach(between_user_and_order::where([['id_user',auth::user()->id],['id_cars',$R->idp]])->get() as $dete){
                        $nam1=(int)$dete->quantity;
                        $nam2=(int)$R->value;
                        between_user_and_order::find($dete->id)->update(['quantity'=>$nam1+$nam2]);
                    }
                }
            }
            if($R->namet == 'books')
            {
                if(collect(product_end_qun::where('id_books',$R->idp)->get())->isEmpty()){
                    product_end_qun::insert([
                        'id_books'=>$R->idp,
                        'required_quantity'=>$R->value,
                        'date'=>now()
                    ]);
                }else{
                    foreach(product_end_qun::where('id_books',$R->idp)->get() as $ky){
                        $nam1=(int)$ky->required_quantity;
                        $nam2=(int)$R->value;
                        product_end_qun::find($ky->id)->update(['required_quantity'=>$nam1+$nam2]);
                    }
                }
                if(collect(between_user_and_order::where([['id_user',auth::user()->id],['id_books',$R->idp]])->get())->isEmpty()){
                    foreach(product_end_qun::where('id_books',$R->idp)->get() as $val){
                        between_user_and_order::insert([
                            'id_user'=>auth::user()->id,
                            'id_books'=>$R->idp,
                            'quantity'=>$R->value,
                            'link_tabel'=>$val->id
                        ]);
                    }
                }else{
                    foreach(between_user_and_order::where([['id_user',auth::user()->id],['id_books',$R->idp]])->get() as $dete){
                        $nam1=(int)$dete->quantity;
                        $nam2=(int)$R->value;
                        between_user_and_order::find($dete->id)->update(['quantity'=>$nam1+$nam2]);
                    }
                }
            }
            if($R->namet == 'clothes')
            {
                if(collect(product_end_qun::where('id_clothes',$R->idp)->get())->isEmpty()){
                    product_end_qun::insert([
                        'id_clothes'=>$R->idp,
                        'required_quantity'=>$R->value,
                        'date'=>now()
                    ]);
                }else{
                    foreach(product_end_qun::where('id_clothes',$R->idp)->get() as $ky){
                        $nam1=(int)$ky->required_quantity;
                        $nam2=(int)$R->value;
                        product_end_qun::find($ky->id)->update(['required_quantity'=>$nam1+$nam2]);
                    }
                }
                if(collect(between_user_and_order::where([['id_user',auth::user()->id],['id_clothes',$R->idp]])->get())->isEmpty()){
                    foreach(product_end_qun::where('id_clothes',$R->idp)->get() as $val){
                        between_user_and_order::insert([
                            'id_user'=>auth::user()->id,
                            'id_clothes'=>$R->idp,
                            'quantity'=>$R->value,
                            'link_tabel'=>$val->id
                        ]);
                    }
                }else{
                    foreach(between_user_and_order::where([['id_user',auth::user()->id],['id_clothes',$R->idp]])->get() as $dete){
                        $nam1=(int)$dete->quantity;
                        $nam2=(int)$R->value;
                        between_user_and_order::find($dete->id)->update(['quantity'=>$nam1+$nam2]);
                    }
                }
            }
            if($R->namet == 'computers')
            {
                if(collect(product_end_qun::where('id_computers',$R->idp)->get())->isEmpty()){
                    product_end_qun::insert([
                        'id_computers'=>$R->idp,
                        'required_quantity'=>$R->value,
                        'date'=>now()
                    ]);
                }else{
                    foreach(product_end_qun::where('id_computers',$R->idp)->get() as $ky){
                        $nam1=(int)$ky->required_quantity;
                        $nam2=(int)$R->value;
                        product_end_qun::find($ky->id)->update(['required_quantity'=>$nam1+$nam2]);
                    }
                }
                if(collect(between_user_and_order::where([['id_user',auth::user()->id],['id_computers',$R->idp]])->get())->isEmpty()){
                    foreach(product_end_qun::where('id_computers',$R->idp)->get() as $val){
                        between_user_and_order::insert([
                            'id_user'=>auth::user()->id,
                            'id_computers'=>$R->idp,
                            'quantity'=>$R->value,
                            'link_tabel'=>$val->id
                        ]);
                    }
                }else{
                    foreach(between_user_and_order::where([['id_user',auth::user()->id],['id_computers',$R->idp]])->get() as $dete){
                        $nam1=(int)$dete->quantity;
                        $nam2=(int)$R->value;
                        between_user_and_order::find($dete->id)->update(['quantity'=>$nam1+$nam2]);
                    }
                }
            }
        broadcast(new who_do_order('Done'))->toOthers();
        }
	}

	public function show_user_ordered(Request $R)
	{
        $var='
        <button type="button" class="ex" style="color: red;z-index:9999999;position: absolute;right: 0;top: 1px;background: none;border: none"><svg style="border-radius: 10px;" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg></button>';
        foreach(between_user_and_order::where('link_tabel',$R->id_p)->get() as $val){
            $var.='<div class="mb-2 card carding" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="'.guest::find($val->id_user)->images.'" alt="'.guest::find($val->id_user)->name.'">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">'.guest::find($val->id_user)->name.'</h5>
                    <p class="card-text">This user requested this quantity:'.$val->quantity.'</p>
                    </div>
                </div>
            </div>
        </div>';
        }
        return response()->json($var);
	}

	public function set_qun_some_pro(Request $R)
	{
        $var=product_end_qun::find($R->id);
        if($R->value != null || $R->value != ' ')
        {
            if($R->value >= $var->required_quantity )
            {
                if($var->id_cars != null)
                {
                    $nam2=(int)$R->value;
                    foreach(DB::table('cars')->where('id',$var->id_cars)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('cars')->where('id',$var->id_cars)->update(['quantity'=>$nam2+$nam3]);
                    }
                    $var->delete();
                    return response()->json(['val'=>'delete']);
                }
                if($var->id_clothes != null)
                {
                    $nam2=(int)$R->value;
                    foreach(DB::table('clothes')->where('id',$var->id_clothes)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('clothes')->where('id',$var->id_clothes)->update(['quantity'=>$nam2+$nam3]);
                    }
                    $var->delete();
                    return response()->json(['val'=>'delete']);
                }
                if($var->id_computers != null)
                {
                    $nam2=(int)$R->value;
                    foreach(DB::table('computers')->where('id',$var->id_computers)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('computers')->where('id',$var->id_computers)->update(['quantity'=>$nam2+$nam3]);
                    }
                    $var->delete();
                    return response()->json(['val'=>'delete']);
                }
                if($var->id_books != null)
                {
                    $nam2=(int)$R->value;
                    foreach(DB::table('books')->where('id',$var->id_books)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('books')->where('id',$var->id_books)->update(['quantity'=>$nam2+$nam3]);
                    }
                    $var->delete();
                    return response()->json(['val'=>'delete']);
                }
            }
            if($R->value < $var->required_quantity )
            {
                if($var->id_cars != null)
                {
                    $nam1=(int)$var->required_quantity;
                    $nam2=(int)$R->value;
                    $var->update(['required_quantity'=>$nam1-$nam2]);
                    foreach(DB::table('cars')->where('id',$var->id_cars)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('cars')->where('id',$var->id_cars)->update(['quantity'=>$nam2+$nam3]);
                    }
                    return response()->json(['val'=>'update','dat_val'=>$nam1-$nam2]);
                }
                if($var->id_clothes != null)
                {
                    $nam1=(int)$var->required_quantity;
                    $nam2=(int)$R->value;
                    foreach(DB::table('clothes')->where('id',$var->id_clothes)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('clothes')->where('id',$var->id_clothes)->update(['quantity'=>$nam2+$nam3]);
                    }
                    $var->update(['required_quantity'=>$nam1-$nam2]);
                    return response()->json(['val'=>'update','dat_val'=>$nam1-$nam2]);
                }
                if($var->id_computers != null)
                {
                    $nam1=(int)$var->required_quantity;
                    $nam2=(int)$R->value;
                    foreach(DB::table('computers')->where('id',$var->id_computers)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('computers')->where('id',$var->id_computers)->update(['quantity'=>$nam2+$nam3]);
                    }
                    $var->update(['required_quantity'=>$nam1-$nam2]);
                    return response()->json(['val'=>'update','dat_val'=>$nam1-$nam2]);
                }
                if($var->id_books != null)
                {
                    $nam1=(int)$var->required_quantity;
                    $nam2=(int)$R->value;
                    $var->update(['required_quantity'=>$nam1-$nam2]);
                    foreach(DB::table('books')->where('id',$var->id_books)->get() as $var2)
                    {
                    $nam3=(int)$var2->quantity;
                    DB::table('books')->where('id',$var->id_books)->update(['quantity'=>$nam2+$nam3]);
                    }
                    return response()->json(['val'=>'update','dat_val'=>$nam1-$nam2]);
                }
            }
        }
    }
    public function get_all_data_order()
    {
        $body='';
        foreach(DB::table('product_end')->get() as $key){
            foreach(cars::where('id',$key->id_cars)->get() as $ke){
                $body.=' <tr class="t'.$key->id.'" id="'.$key->id.'" >
                <td style="text-align: center"><img class="img_t" style="width:70px" src="'.asset($ke->images).'" alt="" /></td>
                <td style="text-align: center" class="name_t">'.$ke->name.'</td>
                <td style="text-align: center">
                <button class="ps-setting">waiteing</button>
                </td>
                <td style="text-align: center" class="quan_t'.$key->id.'" style="text-align: center">'.$key->required_quantity.'</td>
                <td style="text-align: center" class="price_t">$'.$ke->price.'</td>
                <td class="price_t" style="color: yellow;text-align: center">'.$ke->number_evaluation.'</td>
                <td style="text-align: center"><button class="show_users_" id_pr="'.$key->id.'" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                <td style="margin-left: 250px;width:60px;text-align: center">
                    <div class="input-group">
                        <div class="input-group" style="width:50px">
                            <button type="button" class="btn btn-primary btn-number minus_btn" id="'.$key->id.'" disabled="disabled" data-type="minus" data-field="quant['.$key->id.']">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" name="quant['.$key->id.']" class="input-number quant_pro'.$key->id.'" id="quant_pro'.$key->id.'" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                        <div class="input-group plus">
                            <button type="button" class="btn btn-primary btn-number plus_btn" id="'.$key->id.'" data-type="plus" data-field="quant['.$key->id.']">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="'.$key->id.'" type="button">Save</button>
                </td>
            </tr>';
            }
            foreach(clothes::where('id',$key->id_clothes)->get() as $ke){
                $body.=' <tr class="t'.$key->id.'" id="'.$key->id.'" >
                <td style="text-align: center"><img class="img_t" style="width:70px" src="'.asset($ke->images).'" alt="" /></td>
                <td style="text-align: center" class="name_t">'.$ke->name.'</td>
                <td style="text-align: center">
                <button class="ps-setting">waiteing</button>
                </td>
                <td style="text-align: center" class="quan_t'.$key->id.'" style="text-align: center">'.$key->required_quantity.'</td>
                <td style="text-align: center" class="price_t">$'.$ke->price.'</td>
                <td class="price_t" style="color: yellow;text-align: center">'.$ke->number_evaluation.'</td>
                <td style="text-align: center"><button class="show_users_" id_pr="'.$key->id.'" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                <td style="margin-left: 250px;width:60px;text-align: center">
                    <div class="input-group">
                        <div class="input-group" style="width:50px">
                            <button type="button" class="btn btn-primary btn-number minus_btn" id="'.$key->id.'" disabled="disabled" data-type="minus" data-field="quant['.$key->id.']">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" name="quant['.$key->id.']" class="input-number quant_pro'.$key->id.'" id="quant_pro'.$key->id.'" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                        <div class="input-group plus">
                            <button type="button" class="btn btn-primary btn-number plus_btn" id="'.$key->id.'" data-type="plus" data-field="quant['.$key->id.']">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="'.$key->id.'" type="button">Save</button>
                </td>
            </tr>';
            }
            foreach(books::where('id',$key->id_books)->get() as $ke){
                $body.=' <tr class="t'.$key->id.'" id="'.$key->id.'" >
                <td style="text-align: center"><img class="img_t" style="width:70px" src="'.asset($ke->images).'" alt="" /></td>
                <td style="text-align: center" class="name_t">'.$ke->name.'</td>
                <td style="text-align: center">
                <button class="ps-setting">waiteing</button>
                </td>
                <td style="text-align: center" class="quan_t'.$key->id.'" style="text-align: center">'.$key->required_quantity.'</td>
                <td style="text-align: center" class="price_t">$'.$ke->price.'</td>
                <td class="price_t" style="color: yellow;text-align: center">'.$ke->number_evaluation.'</td>
                <td style="text-align: center"><button class="show_users_" id_pr="'.$key->id.'" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                <td style="margin-left: 250px;width:60px;text-align: center">
                    <div class="input-group">
                        <div class="input-group" style="width:50px">
                            <button type="button" class="btn btn-primary btn-number minus_btn" id="'.$key->id.'" disabled="disabled" data-type="minus" data-field="quant['.$key->id.']">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" name="quant['.$key->id.']" class="input-number quant_pro'.$key->id.'" id="quant_pro'.$key->id.'" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                        <div class="input-group plus">
                            <button type="button" class="btn btn-primary btn-number plus_btn" id="'.$key->id.'" data-type="plus" data-field="quant['.$key->id.']">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="'.$key->id.'" type="button">Save</button>
                </td>
            </tr>';
            }
            foreach(computers::where('id',$key->id_computers)->get() as $ke){
                $body.=' <tr class="t'.$key->id.'" id="'.$key->id.'" >
                <td style="text-align: center"><img class="img_t" style="width:70px" src="'.asset($ke->images).'" alt="" /></td>
                <td style="text-align: center" class="name_t">'.$ke->name.'</td>
                <td style="text-align: center">
                <button class="ps-setting">waiteing</button>
                </td>
                <td style="text-align: center" class="quan_t'.$key->id.'" style="text-align: center">'.$key->required_quantity.'</td>
                <td style="text-align: center" class="price_t">$'.$ke->price.'</td>
                <td class="price_t" style="color: yellow;text-align: center">'.$ke->number_evaluation.'</td>
                <td style="text-align: center"><button class="show_users_" id_pr="'.$key->id.'" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                <td style="margin-left: 250px;width:60px;text-align: center">
                    <div class="input-group">
                        <div class="input-group" style="width:50px">
                            <button type="button" class="btn btn-primary btn-number minus_btn" id="'.$key->id.'" disabled="disabled" data-type="minus" data-field="quant['.$key->id.']">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" name="quant['.$key->id.']" class="input-number quant_pro'.$key->id.'" id="quant_pro'.$key->id.'" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                        <div class="input-group plus">
                            <button type="button" class="btn btn-primary btn-number plus_btn" id="'.$key->id.'" data-type="plus" data-field="quant['.$key->id.']">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="'.$key->id.'" type="button">Save</button>
                </td>
            </tr>';
            }
        }
        return response()->json($body);
    }
    public function test_u(Request $R){
        if(Auth::guard('web')->check()||Auth::guard('admin')->check()){
            session()->put('eror','1');
        }else{
            session()->put('eror','0');
        }
    }
    public function cheng_pass(Request $R){
        if($R->pass_new&&$R->pass_old){
            $admin=admin::find(Auth::guard('admin')->user()->id);
            if(Hash::check($R->pass_old,$admin->password)){
                $admin->update(['password'=> Hash::make($R->pass_new)]);
                return response()->json('Done');
            }else{
                return response()->json('password is no right');
                }
        }else{
            return response()->json('no request');
        }
    }
    public function Send_Notif(Request $R){
        notification::insert([
            'content'=>$R->content,
            'read'=>0,
            'date'=>now()
        ]);
        broadcast(new send_notifi('Done'))->toOthers();
    }
    public function i_see_notification(Request $R){
        see_notification::insert([
            'id_notification'=>$R->data1,
            'id_user'=>Auth::user()->id
        ]);
        $obj=notification::find($R->data1);
        $nam1=(int)$obj->read;
        $obj->update(['read'=>$nam1+1]);
        $bod='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye mov" viewBox="0 0 16 16">
        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
      </svg>';
        return response()->json(['date'=>$obj->date,'body'=>$bod]);
    }

    public function get_all_notification(Request $R){
        $body='';
        $body_2='';
        foreach(DB::table('notification')->get() as $valu){
            if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty()){
                $body.='<div  class="toast re'.$valu->id.'">
                    <div class="toast-header">
                    <strong class="me-auto">DreamShop</strong>
                    <small>'.$valu->date.'</small>
                    <button type="button" class="btn-close b_close" i="'.$valu->id.'"></button>
                    </div>
                    <div class="toast-body">
                        '.$valu->content.'
                    </div>
                </div>';
                $body_2.='
                <li style="margin-top: 5px;margin-bottom: 5px;width:100%"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
                <div  class="toast_"style="width:100%;box-shadow: 0px 0px 10px 1px gray;">
                    <div class="toast-header">
                    <strong class="me-auto">DreamShop</strong>
                    <small class="small'.$valu->id.'"  style="margin-left:40%">'.$valu->date.'</small>
                    </div>
                    <div class="toast-body"  style="color: black;font-size:13.5px">
                        '.$valu->content.'
                    </div>
                </div></li>';
            }else{
            $body_2.='
            <li style="margin-top: 5px;margin-bottom: 5px;width:100%"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
                <div  class="toast_"style="width:100%;box-shadow: 0px 0px 10px 1px gray;">
                    <div class="toast-header">
                    <strong class="me-auto">DreamShop</strong>
                    <small class="small'.$valu->id.'"  style="margin-left:40%">'.$valu->date.' <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye mov" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg></small>
                    </div>
                    <div class="toast-body"  style="color: black;font-size:13.5px">
                        '.$valu->content.'
                    </div>
                </div></li>';
        }
        }
        $nam=collect(DB::select("SELECT notification.id FROM notification, see_notification WHERE notification.id != see_notification.id_notification"))->count();
        return response()->json(['body_1'=>$body,'body_2'=>$body_2,'nam'=>$nam]);
    }
}
