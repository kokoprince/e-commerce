<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use App\cars;
use App\notification;
use App\Events\see_comment;
use App\see_notification;
use Illuminate\Support\Facades\Route;

Auth::routes();

////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ DreamShop
Route::get('/DreamShop','control_1@show')->name('DreamShop');
Route::post('/search','control_1@search')->name('search');
Route::post('/seach_event','control_1@seach_event')->name('seach_event');
Route::post('/event_show_1','control_1@event_show_1')->name('event_show_1');
Route::post('/nm_w_show','control_1@nm_w_show')->name('nm_w_show');
Route::post('/remove_pro','controlle_public_event@remove_pro')->name('remove_pro');

////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ Grid
Route::get('/DreamShop_products','control_1@Grid')->name('Grid');
Route::post('/click_show_event','control_1@click_show_event')->name('click_show_event');
Route::post('/select_by','control_1@select_by')->name('select_by');
Route::post('/select_by_price','control_1@select_by_price')->name('select_by_price');
Route::post('/btn_love_pro','control_1@btn_love_pro')->name('btn_love_pro');


////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ sing_in
Route::get('/sing_in','control_1@sing_in')->name('sing_in');
Route::post('/create_ac','control_1@create_ac')->name('create_ac');

////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ login
Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/login','control_1@login')->name('login');
    Route::post('/event_login','events@event_login')->name('event_login');
    Route::post('/logout','control_1@logout')->name('logout');
    Route::post('/check_ud','control_1@check_ud')->name('check_ud');
  });


////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ show product
Route::get('/DreamShop_only_product','control_1@show_product')->name('show_product');
Route::post('/comment_insert','events@comment_insert')->name('comment_insert');
Route::post('/go_to_grid','events@go_to_grid')->name('go_to_grid');
Route::post('/comment_edit','events@comment_edit')->name('comment_edit');
Route::post('/comment_delete','events@comment_delete')->name('comment_delete');
Route::post('/add_cart_only','events@add_cart_only')->name('add_cart_only');
Route::post('/add_bestlist_pro','events@add_bestlist_pro')->name('add_bestlist_pro');
Route::post('/check_comments','controlle_public_event@check_comments')->name('check_comments');
Route::post('/edit_comment','controlle_public_event@edit_comment')->name('edit_comment');
Route::post('/add_order_r','controlle_public_event@add_order_r')->name('add_order_r');

////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ cart
Route::get('/DreamShop_cart','control_1@cart')->name('cart');
Route::post('/payments','controlle_public_event@payments')->name('payments');
Route::post('/delete_prp_cart','controlle_public_event@delete_prp_cart')->name('delete_prp_cart');
Route::post('/plus_amount_cart','controlle_public_event@plus_amount_cart')->name('plus_amount_cart');
Route::post('/minus_amount_cart','controlle_public_event@minus_amount_cart')->name('minus_amount_cart');
Route::post('/all_amount_cart','controlle_public_event@all_amount_cart')->name('all_amount_cart');

////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ dashboard-user
Route::middleware('auth')->group(function () {
        Route::get('/my-profile','control_1@profile')->name('profile');
Route::post('/show_events_pro','events@show_events_pro')->name('show_events_pro');
Route::post('/drop_pro_user','events@drop_pro_user')->name('drop_pro_user');
Route::post('/update_profile_user','events@update_profile_user')->name('update_profile_user');
Route::post('/btn_cart','control_1@btn_cart')->name('btn_cart');
Route::post('/i_see_notification','controlle_public_event@i_see_notification')->name('i_see_notification');
Route::post('/get_all_notification','controlle_public_event@get_all_notification')->name('get_all_notification');
});

////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ dashboard-admin


Route::middleware('auth:admin')->group(function () {

    Route::get('/my-dashboard', 'control_1@dashboard')->name('dashboard');
        Route::get('/my-dashboard_list', 'control_1@dashboard_list')->name('dashboard_list');
        Route::get('/my-setting_profile','control_1@show_my_profile')->name('show_my_profile');
        Route::get('/my-dashboard_list_book', 'control_1@dashboard_list_book')->name('dashboard_list_book');
        Route::get('/my-dashboard_list_clothe', 'control_1@dashboard_list_clothe')->name('dashboard_list_clothe');
        Route::get('/my-dashboard_list_computer', 'control_1@dashboard_list_computer')->name('dashboard_list_computer');
        Route::get('my-dashboard_list_orders_products',function (){ return view('some_of.order_p'); })->name('orders_products');
        Route::get('my-dashboard_page_create_notifications',function (){ return view('some_of.notifications'); })->name('page_create_notifications');
    Route::post('/event_dashboard', 'control_1@event_dashboard')->name('event_dashboard');
    Route::post('/insert_data', 'control_1@insert_data')->name('insert_data');
    Route::post('/insert_data_e2', 'events@insert_data_e2')->name('insert_data_e2');//
    Route::post('/insert_data_e3', 'events@insert_data_e3')->name('insert_data_e3');
    Route::post('/insert_data_e4', 'events@insert_data_e4')->name('insert_data_e4');
    Route::post('/edite_data', 'control_1@edite_data')->name('edite_data');
    Route::post('/edite_data_e2', 'events@edite_data_e2')->name('edite_data_e2');
    Route::post('/edite_data_e3', 'events@edite_data_e3')->name('edite_data_e3');
    Route::post('/edite_data_e4', 'events@edite_data_e4')->name('edite_data_e4');
    Route::post('/delete_data', 'control_1@delete_data')->name('delete_data');
    Route::post('/delete_data_e2', 'events@delete_data_e2')->name('delete_data_e2');
    Route::post('/delete_data_e3', 'events@delete_data_e3')->name('delete_data_e3');
    Route::post('/delete_data_e4', 'events@delete_data_e4')->name('delete_data_e4');
    Route::post('/search_data_cars', 'events@search_data_cars')->name('search_data_cars');//car
    Route::post('/search_data_cars_e2', 'events@search_data_cars_e2')->name('search_data_cars_e2');//clothes
    Route::post('/search_data_cars_e3', 'events@search_data_cars_e3')->name('search_data_cars_e3');//computer
    Route::post('/search_data_cars_e4', 'events@search_data_cars_e4')->name('search_data_cars_e4');//book
    Route::post('/update_data_cars', 'events@update_data_cars')->name('update_data_cars');//car
    Route::post('/update_data_e2', 'events@update_data_e2')->name('update_data_e2');//clothes
    Route::post('/update_data_e3', 'events@update_data_e3')->name('update_data_e3');//computer
    Route::post('/update_data_e4', 'events@update_data_e4')->name('update_data_e4');//book
    Route::post('/update_profile','events@update_profile')->name('update_profile');
    Route::post('/add_or_update','events@add_or_update')->name('add_or_update');
    Route::post('/select_img_','events@select_img_')->name('select_img_');
    Route::post('/up_images','events@up_images')->name('up_images');
    Route::post('/show_user_ordered','controlle_public_event@show_user_ordered')->name('show_user_ordered');
    Route::post('/set_qun_some_pro','controlle_public_event@set_qun_some_pro')->name('set_qun_some_pro');
    Route::post('/cheng_pass','controlle_public_event@get_all_data_order')->name('get_all_data_order');
    Route::post('/cheng_pass','controlle_public_event@cheng_pass')->name('cheng_pass');
    Route::post('/Send_Notif','controlle_public_event@Send_Notif')->name('Send_Notif');
});
////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ box complaints
Route::get('box_complaints',function (){
    return view('chat');
})->name('box_complaints');
Route::post('/send_ms_','controlle_public_event@send_ms_')->name('send_ms_');
Route::post('/select_user_ms','controlle_public_event@select_user_ms')->name('select_user_ms');
Route::post('/list_ms','controlle_public_event@list_ms')->name('list_ms');
Route::post('/test_u','controlle_public_event@test_u')->name('test_u');






Route::get('test_relation',function (){
        $notifi=notification::where('content','new offers in Dreamshop ccc it now ----*')->get();
        return $notifi;

});

Route::get('wed',function (){
    return view('taster');
});
////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ end the lines





