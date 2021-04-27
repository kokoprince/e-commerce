<?php

namespace App\Http\Controllers;


use App\guest;
use App\admin;
use App\top_admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\cars;
use App\cart;
use App\books;
use App\clothes;
use App\computers;
use App\Events\remove_pro;
use App\product_love;
use Illuminate\Http\Request;
use App\show_sections;
use App\suggested_search_words;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class control_1 extends Controller
{
//-----------------------------------home page-----------------------------------------------------
public $eve=0;
    public function show()
    {
        session()->put('go_pages','');
        return view('index',['data_show'=>show_sections::get()]);//the_page
    }
    public function event_show_1(Request $Request){
        $Request->session()->put('case_search','0');
        $Request->session()->put('nm_s',$Request->nm);
    }
    public function search(Request $Request)
    {
        $body_data='';
                foreach(show_sections::get() as $ky)
                {
                    foreach(DB::table($ky->sections)->where('name','like',"$Request->con%")->get(['name','id']) as $ke)
                    {

                        $body_data.='<a href="'. route("show_product") .'" class="list-group-item go_g" name_t='.$ky->sections.' pro_id='.$ke->id.'>'.$ke->name.'</a>';
                    }
                }
        if($Request->con == ''){
            $body_data='<li class="list-group-item">No Result about your Research...!!</li>';
        }
        return response()->json($body_data);


    }
//--------------------------------------single product page------------------------------------------------------
    public function show_product(){
        session()->put('case_pay',null);
        return view('only_pro');
    }
    public function click_show_event(Request $Request){
        $Request->session()->put('case_search','0');
        $Request->session()->put('the_pro',$Request->num);
        $Request->session()->put('id_pro',$Request->id_mun);
    }
//--------------------------------grid page-------------------------------------------------------
    public function Grid()
    {
        return view('shop-grid',['data_show'=>show_sections::get()]);
    }

    public function select_by(Request $Request)
    {
        $var='';
        if($Request->num == 'Any'){
            foreach (DB::table(session()->get('nm_s'))->get() as $key) {
                $var .= '<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
										<a href="product-details.html">
											<img class="default-img" src=' . asset($key->images) . ' alt="#">
                                            ';
                if ($key->Discount > 1) {
                    $var .= ' <span class="price-dec">off%' . $key->Discount . '</span>';
                }
                $var .= '</a>
										<div class="button-head">
											<div class="product-action">
                                                <a title="Wishlist" href="#"><i class=" ti-heart"></i><span>Add to Wishlist</span></a>
											</div>
											<div class="product-action-2">
												<a title="Add to cart" href="#">Add to cart</a>
											</div>
										</div>
									</div>
                                    <div class="product-content">
										<h3><a href="product-details.html">' . $key->name . '</a></h3>
										<div class="product-price">
											<span>$' . $key->price . ' </span>
										</div>
									</div>
								</div>
							</div>';
            }
        }else {
            foreach (DB::table(session()->get('nm_s'))->get()->sortBy($Request->num) as $key) {
                $var .= '<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									<div class="product-img">
										<a href="product-details.html">
											<img class="default-img" src=' . asset($key->images) . ' alt="#">
                                            ';
                if ($key->Discount > 1) {
                    $var .= ' <span class="price-dec">off%' . $key->Discount . '</span>';
                }
                $var .= '</a>
										<div class="button-head">
											<div class="product-action">
                                                <a title="Wishlist" href="#"><i class=" ti-heart"></i><span>Add to Wishlist</span></a>
											</div>
											<div class="product-action-2">
												<a title="Add to cart" href="#">Add to cart</a>
											</div>
										</div>
									</div>
                                    <div class="product-content">
										<h3><a href="product-details.html">' . $key->name . '</a></h3>
										<div class="product-price">
											<span>$' . $key->price . ' </span>
										</div>
									</div>
								</div>
							</div>';
            }
        }
        return response()->json($var);
    }
//---------------------------------cars---------------------------------------------
    public function cart(){
        return view('cart');
    }
//----------------------------------sing in--------------------------------------------------------------------
    public function sing_in(){
        if(Auth::check()||Auth::guard('admin')->check()){
            return redirect()->back();
        }else{
            return view('sing_in');
        }
    }
    public function create_ac(Request $Request){
        $validator = Validator::make($Request->all(), [
            'name' => 'required|unique:App\guest,name',
            'email' => 'required|email|unique:App\guest,email',
            'phone' => 'required|numeric|unique:App\guest,phone',
            'date' => 'required',
            'password' => 'required'
        ],[
            'name.required'=>'Enter your name!','name.unique'=>'this name is exist',
            'email.required'=>'Enter your email!','email.unique'=>'this email is exist','email.email'=>'this not email',
            'phone.required'=>'Enter your phone!','phone.unique'=>'this phone is exist','phone.max'=>'this number biger than 11 character','phone.numeric'=>'this input is not numeric',
            'male_female.required'=>'Enter your type!',
            'date.required'=>'Enter your date!','date.date'=>'this not date!',
            'password.required'=>'Enter your password!'
        ]);
        if(!$validator->fails()){
           if(Str::endsWith($Request->email, '@gmail.com'))
           {
               guest::insert([
                   'images'=>'https://www.w3schools.com/w3images/avatar2.png',
                   'name' => $Request->name,
                   'email' => $Request->email,
                   'phone' => $Request->phone,
                   'type' => 1,
                   'date' => $Request->date,
                   'password' => Hash::make($Request->password),
                   'cases' => 0
               ]);
               if(Auth::guard('web')->attempt(['email' => $Request->email, 'password' => $Request->password])){
                return redirect()->route('profile');
            }
           }else{
            return view('sing_in')->with(['error_email'=>'your email is not gmail','do_it'=>'no']);
           }
        }else{
            return view('sing_in')->with([
                'error_name'=>$validator->errors()->first('name'),
                'error_email'=>$validator->errors()->first('email'),
                'error_phone'=>$validator->errors()->first('phone'),
                'error_date'=>$validator->errors()->first('date'),
                'error_password'=>$validator->errors()->first('password')]);
        }
    }
//--------------------------------login---------------------------------------------------------------------------------
    public function login(){
        if(Auth::check()||Auth::guard('admin')->check()){
            return redirect()->back();
        }else{
            if(session()->get('go_pages') == ''){
                return view('login');
            }else{
                session()->put('go_pages','');
                return view('login');
            }
        }
    }
//----------------------------------------profile-------------------------------------------------------------
    public  function  profile(){
        if(session()->get('go_pages') == ''){
            session()->put('go_pages','index');
            return view('profile',['data_show'=>show_sections::get()]);
        }else{
            return view('profile',['data_show'=>show_sections::get()]);
        }
    }
//----------------------------------------dashboard-------------------------------------------------------------
    public function dashboard(){
            return view('dashbord_admin', ['data_show_1' => show_sections::get()]);
    }
    public function show_my_profile(){
        return view('some_of.my_profile');
    }
    public function dashboard_list(){
            return view('some_of.t_car', ['data_cars' => cars::get()]);
    }
    public function dashboard_list_book(){
            return view('some_of.t_book', ['data_book' => books::get()]);
    }
    public function dashboard_list_clothe(){
            return view('some_of.t_clothe', ['data_clothe' => clothes::get()]);
    }
    public function dashboard_list_computer(){
            return view('some_of.t_computer', ['data_computer' => computers::get()]);
    }

    public function event_dashboard(Request $Request){
        session()->put('name_table',$Request->name_section);
    }
    public function logout(){
        Auth::guard('admin')->logout();
        Auth::guard('web')->logout();
    }
    public function insert_data(Request $R)
    {
        $img = $R->file('img');
        $img_name = time() . '.' . $img->extension();
        $R->img->move('images\Producer\car', $img_name);
        cars::insert([
            'Type_id' => $R->select,
            'images' => 'images/Producer/car/' . $img_name,
            'quantity' => $R->Quantity,
            'name' => $R->name,
            'color' => $R->color,
            'size' => $R->size,
            'number_of_passengers' => $R->passengers,
            'price' => $R->price,
            'number_evaluation' => $R->evaluation,
            'Discount' => $R->Discount
        ]);

        $to_body='';
        foreach(cars::get()->chunk(30) as $ke){
        foreach($ke as $key){
            $to_body.='<tr class="t'.$key->id.'" id="'.$key->id.'" >
            <td><img class="img_t" src="'. $key->images .'" style="width:150px" alt="" /></td>
            <td class="name_t">'.$key->name.'</td>
            <td>';
                if($key->quantity > 4){
                $to_body.=' <button class="pd-setting">ِِAlright</button>';
                }elseif($key->quantity < 3){
                $to_body.=' <button class="ds-setting">Danger</button>';
                }else{
                $to_body.=' <button class="ps-setting">May expire</button>';
                }
                $to_body.='</td>
            <td class="quan_t">'.$key->quantity.'</td>
            <td class="price_t">$'.$key->price.'</td>
            <td class="price_t" style="color: yellow">'. $key->number_evaluation .'</td>
            <td>';
                foreach(DB::table('images')->where('id_cars',$key->id)->get() as $k => $val){
                $to_body.='  <input type="hidden" class="'.Str::slug($key->name,'_').'_'.$k .'" id_'.$k.'="'.$val->id.'">';
                }
                $to_body.=' <button type="submit" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="'.$key->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                <button type="submit" data-toggle="tooltip" title="Images" class="pd-setting-ed images" id_img="'.$key->id.'" n_get_img="'.$key->name.'" name_t=cars><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/></svg></button>
                <button type="submit" data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="'.$key->id .'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </td>
        </tr>';
        }
     }

        return response()->json($to_body);
    }
    public function edite_data(Request $q){//id_thing
        return response()->json([
            'name'=>cars::find($q->id_thing)->name,
            'price'=>cars::find($q->id_thing)->price,
            'quantity'=>cars::find($q->id_thing)->quantity,
            'color'=>cars::find($q->id_thing)->color,
            'size'=>cars::find($q->id_thing)->size,
            'passengers'=>cars::find($q->id_thing)->number_of_passengers,
            'number_evaluation'=>cars::find($q->id_thing)->number_evaluation,
            'Type_id'=>cars::find($q->id_thing)->Type_id,
            'Discount'=>cars::find($q->id_thing)->Discount
        ]);
    }
    public function delete_data(Request $Re){
        cars::find($Re->id_thing)->delete();
        broadcast(new remove_pro('cars',$Re->id_thing))->toOthers();
    }
    public function check_ud(Request $R){
        if(Auth::check()){
            return redirect()->back();
        }else{
            return redirect()->route('login');
        }
    }
    public function btn_love_pro(Request $R){

        if($R->name_t == 'cars'){
            if(product_love::where([['id_cars',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_cars',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_cars'=>$R->id_pro
                ]);
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>';
                    $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }
        }
        if($R->name_t == 'books'){
            if(product_love::where([['id_books',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_books',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_books'=>$R->id_pro
                ]);
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>';
                    $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }
        }
        if($R->name_t == 'clothes'){
            if(product_love::where([['id_clothes',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_clothes',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_clothes'=>$R->id_pro
                ]);
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>';
                    $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }
        }
        if($R->name_t == 'computers'){
            if(product_love::where([['id_computers',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_computers',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_computers'=>$R->id_pro
                ]);
                $star='<svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>';
                    $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }
        }
    }




    public function btn_cart(Request $R){
        if($R->name_t == 'cars'){
            if(cart::where([['pro_car_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_car_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                $star='<a title="Add to cart" class="btn_cart" n_t=cars id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="c_'.$R->id_pro.'">Add to cart</a>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                if(cars::find($R->id_pro)->Discount > 0){
                    $inte=(int)cars::find($R->id_pro)->price;
                    $des=(int)cars::find($R->id_pro)->Discount;
                    $val=$inte*$des/100;
                    $fin_val=(int)cars::find($R->id_pro)->price-$val;
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_car_id'=>$R->id_pro,
                        'the_price'=>$fin_val,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>$fin_val,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=cars id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="c_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }else{
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_car_id'=>$R->id_pro,
                        'the_price'=>cars::find($R->id_pro)->price,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>cars::find($R->id_pro)->price,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=cars id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="c_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }
            }
        }
        elseif($R->name_t == 'books'){
            if(cart::where([['pro_book_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_book_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                $star='<a title="Add to cart" class="btn_cart" n_t=books id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="bo_'.$R->id_pro.'">Add to cart</a>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                if(books::find($R->id_pro)->Discount > 0){
                    $inte=(int)books::find($R->id_pro)->price;
                    $des=(int)books::find($R->id_pro)->Discount;
                    $val=$inte*$des/100;
                    $fin_val=(int)books::find($R->id_pro)->price-$val;
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_book_id'=>$R->id_pro,
                        'the_price'=>$fin_val,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>$fin_val,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=books id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="bo_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }else{
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_book_id'=>$R->id_pro,
                        'the_price'=>books::find($R->id_pro)->price,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>books::find($R->id_pro)->price,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=books id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="bo_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }
            }
        }
        elseif($R->name_t == 'clothes'){
            if(cart::where([['pro_clothe_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_clothe_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                $star='<a title="Add to cart" class="btn_cart" n_t=clothes id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="cl_'.$R->id_pro.'">Add to cart</a>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                if(clothes::find($R->id_pro)->Discount > 0){
                    $inte=(int)clothes::find($R->id_pro)->price;
                    $des=(int)clothes::find($R->id_pro)->Discount;
                    $val=$inte*$des/100;
                    $fin_val=(int)clothes::find($R->id_pro)->price-$val;
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_clothe_id'=>$R->id_pro,
                        'the_price'=>$fin_val,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>$fin_val,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=clothes id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="cl_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }else{
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_clothe_id'=>$R->id_pro,
                        'the_price'=>clothes::find($R->id_pro)->price,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>clothes::find($R->id_pro)->price,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=clothes id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="cl_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }
            }
        }
        elseif($R->name_t == 'computers'){
            if(cart::where([['pro_computer_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_computer_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                $star='<a title="Add to cart" class="btn_cart" n_t=computers id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="com_'.$R->id_pro.'">Add to cart</a>';
                $num_item=collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
            }else{
                if(computers::find($R->id_pro)->Discount > 0){
                    $inte=(int)computers::find($R->id_pro)->price;
                    $des=(int)computers::find($R->id_pro)->Discount;
                    $val=$inte*$des/100;
                    $fin_val=(int)computers::find($R->id_pro)->price-$val;
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_computer_id'=>$R->id_pro,
                        'the_price'=>$fin_val,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>$fin_val,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=computers id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="com_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }else{
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_computer_id'=>$R->id_pro,
                        'the_price'=>computers::find($R->id_pro)->price,
                        'case_Pay'=>0,
                        'number_pro'=>1,
                        'total_price'=>computers::find($R->id_pro)->price,
                        'date'=>now()
                    ]);
                    $star='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=computers id_p="'.$R->id_pro.'" id_show="'.$R->id_pro.'" id="com_'.$R->id_pro.'">Add to cart</a>';
                        $num_item= collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count();
                return response()->json(['body'=>$star,'num_itms'=>$num_item]);
                }
            }
        }
    }

	public function go_()
	{
        return redirect()->route('sing_in');
	}

	public function select_by_price(Request $R)
	{
        $body='';
    foreach(DB::table(session()->get('nm_s'))->where('price','<=',$R->price)->get()->chunk(50) as $ke){
                                foreach($ke as $key){
                                        if(Auth::guard('web')->check()||Auth::guard('admin')->check()){
                                            $body .=' <div class="col-lg-4 col-md-6 col-12 best_list '.session()->get('nm_s').$key->id .'" id="'. $key->id .'">';
                                        }else{
                                            $body .='<div class="col-lg-4 col-md-6 col-12 '.session()->get('nm_s').$key->id .'">';
                                        }
                                        $body .=' <div class="single-product">
                                            <div class="product-img">
                                                <a class="click_show_event" href="'.route('show_product').'" id="'.$key->id.'">
                                                    <img class="default-img img_'.session()->get('nm_s').$key->id .'" src="'.asset($key->images).'" alt="#">';
                                                    if($key->Discount > 1){
                                                        $body .=' <span class="price-dec">off%'.$key->Discount.' </span>';
                                                    }
                                                    $body .='</a>
                                                <div class="button-head best_list" id="'. $key->id .'" style="height: auto">
';
                                                    if(Auth::check()){
                                                        if(session()->get('nm_s') == 'cars'){
                                                            if (collect(product_love::where([['id_cars',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty()){
                                                                $body .='<div class="product-action show_best_list def_co'.$key->id.'">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='."cars".' id_p="'. $key->id .'" id_show="'.$key->id.' " id="c'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>';
                                                            }else{
                                                                $body .='<div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='."cars".' id_p="'. $key->id .'" id_show="'.$key->id.' " id="c'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>';
                                                            }
                                                        }elseif(session()->get('nm_s') == 'books'){
                                                            if (collect(product_love::where([['id_books',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty()){
                                                            $body .=' <div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t=books id_p="'. $key->id .'" id_show="'.$key->id.' " id="bo'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>';
                                                            }else{
                                                                $body .='<div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t=books id_p="'. $key->id .'" id_show="'.$key->id.' " id="bo'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>';
                                                            }
                                                        }elseif(session()->get('nm_s') == 'computers'){
                                                            if (collect(product_love::where([['id_computers',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                            {
                                                                $body .='<div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t=computers id_p="'. $key->id .'" id_show="'.$key->id.' " id="com'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>';
                                                            }else{
                                                            $body .='  <div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t=computers id_p="'. $key->id .'" id_show="'.$key->id.' " id="com'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>';
                                                            }
                                                        }elseif(session()->get('nm_s') == 'clothes'){
                                                            if (collect(product_love::where([['id_clothes',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                            {$body .=' <div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t=clothes id_p="'. $key->id .'" id_show="'.$key->id.' " id="cl'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>';
                                                            }else{
                                                            $body .=' <div class="product-action show_best_list def_co'.$key->id.' ">
                                                                <a title="Wishlist" class="btn_love_pro" n_t=clothes id_p="'. $key->id .'" id_show="'.$key->id.' " id="cl'.$key->id.' ">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>';
                                                            }
                                                        }
                                                    }else{
                                                        $body .=' <div class="product-action">
                                                        <a title="Wishlist" href="'.route('login').'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                        </svg><span>Add to bestlist</span></a>
                                                    </div>';
                                                    }
                                                    $body .='  <div class="product-action-2 body_add_cart">';
                                                        if (Auth::check()){

                                                        if(session()->get('nm_s') == 'cars'){
                                                            if (collect(DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_car_id',$key->id]])->get())->isEmpty()){
                                                                $body .=' <a title="Add to cart" class="btn_cart" n_t='."cars".' id_p="'. $key->id .'" id_show="'.$key->id.' " id="c_'.$key->id.' ">Add to cart</a>';
                                                            }else{
                                                                $body .='<a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='."cars".' id_p="'. $key->id .'" id_show="'.$key->id.' " id="c_'.$key->id.' ">Add to cart</a>';
                                                            }
                                                        }elseif(session()->get('nm_s') == 'books'){
                                                            if (collect(DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_book_id',$key->id]])->get())->isEmpty()){
                                                                $body .='<a title="Add to cart" class="btn_cart" n_t=books id_p="'. $key->id .'" id_show="'.$key->id.' " id="bo_'.$key->id.' ">Add to cart</a>';
                                                            }else{
                                                                $body .=' <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=books id_p="'. $key->id .'" id_show="'.$key->id.' " id="bo_'.$key->id.' ">Add to cart</a>';
                                                            }
                                                        }elseif(session()->get('nm_s') == 'clothes'){
                                                                if (collect(DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_clothe_id',$key->id]])->get())->isEmpty()){
                                                                    $body .=' <a title="Add to cart" class="btn_cart" n_t=clothes id_p="'. $key->id .'" id_show="'.$key->id.' " id="cl_'.$key->id.' ">Add to cart</a>';
                                                                }else{
                                                                    $body .=' <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=clothes id_p="'. $key->id .'" id_show="'.$key->id.' " id="cl_'.$key->id.' ">Add to cart</a>';
                                                            }
                                                        }elseif(session()->get('nm_s') == 'computers'){
                                                                if (collect(DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_computer_id',$key->id]])->get())->isEmpty()){
                                                                    $body .=' <a title="Add to cart" class="btn_cart" n_t=computers id_p="'. $key->id .'" id_show="'.$key->id.' " id="com_'.$key->id.' ">Add to cart</a>';
                                                                }else{
                                                                    $body .=' <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t=computers id_p="'. $key->id .'" id_show="'.$key->id.' " id="com_'.$key->id.' ">Add to cart</a>';
                                                                }
                                                            }

                                                            }else{
                                                                $body .='<a title="Add to cart" href="'.route('login').'">Add to cart</a>';
                                                            }
                                                            $body .='   </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a class="click_show_event name_'.session()->get('nm_s').$key->id .'" href="'.route('show_product').' " id="'. $key->id .'">'.$key->name.' </a></h3>
                                                <div class="product-price">
                                                    <span>$<span class="price_'.session()->get('nm_s').$key->id .'">'.$key->price.' </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                }
    return response()->json($body);
	}

	public function seach_event(Request $R)
    {
        $R->session()->put('content_search',$R->con);
        $R->session()->put('case_search','1');
	}

}
