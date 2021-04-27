<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="try/css/bootstrap.min.css">
    <link rel="stylesheet" href="try/css/font-awesome.min.css">
    <link rel="stylesheet" href="try/css/nalika-icon.css">
    <link rel="stylesheet" href="try/css/owl.carousel.css">
    <link rel="stylesheet" href="try/css/owl.theme.css">
    <link rel="stylesheet" href="try/css/owl.transitions.css">
    <link rel="stylesheet" href="try/css/animate.css">
    <link rel="stylesheet" href="try/css/normalize.css">
    <link rel="stylesheet" href="try/css/meanmenu.min.css">
    <link rel="stylesheet" href="try/css/main.css">
    <link rel="stylesheet" href="try/css/morrisjs/morris.css">
    <link rel="stylesheet" href="try/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="try/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="try/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="try/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="try/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="try/style.css">
    <link rel="stylesheet" href="try/css/responsive.css">
    <script src="try/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <style>
        .cover_form{
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(20, 20, 20, 0.733);
        z-index: 9991;
        display: none;
        }
        .box_images_{
        position: relative;
        left:35%;
        top:25%;
        width:35em;
        height: 25em;
        background-color: aliceblue;
        box-shadow: 0px 0px 10px 5px white;
        border-radius: 10px;
        text-align: center;
        padding: 10px;
        }
        .img_1{
        width: 200px;
        height: 90px;
        border: 0.20em solid transparent;
        border-image: linear-gradient(140deg, #2c07fa 0%, #7bf6ff 50%, #d9ff00 75%) 1 round;
        border-radius: 10px;
        box-sizing: border-box;
        display: inline-block;
        margin-top: 20px;
        margin-left: 20px;
        float:left;
        }
        .save_img{
        position: absolute;
        left: 38%;
        top: 85%;
        border:1px solid #0dcaf0;
        color:#0dcaf0;
        }
        .exit_{
        position: absolute;
        right: 1%;
        top: 1%;
        color:red;
        padding:2px;
        width:30px;
        border:none;
        background-color: aliceblue;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="background-color: #152036">
<div class="left-sidebar-pro">
    @include('body.nave')
</div>
<style>
    *{
        margin:0%;
        padding:0%;

    }
    .handel_cover{
    width: 100%;
    height: 100%;
    position: fixed;
    left: 50%;
    top: 50%;
    transform:translate(-50%,-50%);
    background-color: #1b2f55a2;
    display:none;
    z-index: 99999;
    }
    .handel_thing{
    width: 40%;
    height: 50%;
    position: fixed;
    left: 50%;
    top: 50%;
    transform:translate(-50%,-50%);
    background-color: #152036;
    box-shadow: 0px 0px 10px 5px gray;
    overflow-y: scroll;
    z-index: 999999;
}
.carding{
    position: relative;
    left: 40%;
    top: 5%;
    transform:translate(-40%,-5%);
}
</style>
<div class="handel_cover">
    <div class="handel_thing">
    </div>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="header-advance-area" >
        <div class="header-top-area" style="box-shadow: 0px 0px 10px 1px white">
            <div class="container-fluid">
                <div class="row" >
                    @include('body.site_nav')
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="alert alert-success sh" style="width:250px;text-align:center;display:none;position: fixed;left: 14%;top: 17.5%;z-index: 99999;" role="alert">
            Done success !
        </div>
        <div class="alert alert-danger not_delete" style="width:250px;text-align:center;display:none;position: fixed;left: 14%;top: 17.5%;z-index: 99999;" role="alert">
            Deleted !
        </div>
        <div class="product-status mg-b-30">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <input type="hidden" class="id_img" _img_="0" _name_="0">
                            <h4>All The Orders Products <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" fill="currentColor" class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
                                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                              </svg></h4>
                            <div class="add-product">
                            </div>
                            <table style="width: 100%">
                            <tr>
                                <th style="text-align: center">Image</th>
                                <th style="text-align: center">name</th>
                                <th style="text-align: center">cases</th>
                                <th style="text-align: center">required quantity</th>
                                <th style="text-align: center">price</th>
                                <th style="text-align: center">the evaluation</th>
                                <th style="text-align: center">People who ordered the product</th>
                                <th style="text-align: center">Setting</th>
                            </tr>
                                <tbody class="body_table">
                                <form method="post" class="form_table" enctype="multipart/form-data">
                                    @csrf
                                        @foreach (DB::table('product_end')->get() as $ke)
                                        @if(isset($ke->id_books))
                                            @foreach(App\books::where('id',$ke->id_books)->get() as $key)
                                                <tr class="t{{$ke->id}}" id="{{$key->id}}" >
                                                    <td style="text-align: center"><img class="img_t" style="width:70px" src="{{ $key->images ?? 'https://www.shafischools.com/images/service-bg/img-01.jpg'}}" alt="" /></td>
                                                    <td style="text-align: center" class="name_t">{{ $key->name }}</td>
                                                    <td style="text-align: center">
                                                        <button class="ps-setting">waiteing</button>
                                                    </td>
                                                    <td style="text-align: center" class="quan_t quan_t{{$ke->id}}" style="text-align: center">{{ $ke->required_quantity }}</td>
                                                    <td style="text-align: center" class="price_t">${{ $key->price }}</td>
                                                    <td class="price_t" style="color: yellow;text-align: center">{!! $key->number_evaluation !!}</td>
                                                    <td style="text-align: center"><button class="show_users_" id_pr="{{ $ke->id }}" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                                                    <td style="margin-left: 250px;width:60px;text-align: center">
                                                        <div class="input-group">
                                                            <div class="input-group" style="width:50px">
                                                                <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $ke->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $ke->id }}]">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" name="quant[{{ $ke->id }}]" class="input-number quant_pro{{ $ke->id }}" id="quant_pro{{ $ke->id }}" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                                                            <div class="input-group plus">
                                                                <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $ke->id }}" data-type="plus" data-field="quant[{{ $ke->id }}]">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="{{ $ke->id }}" type="button">Save</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                            @if(isset($ke->id_cars))
                                                @foreach(App\cars::where('id',$ke->id_cars)->get() as $key)
                                                    <tr class="t{{$ke->id}}" id="{{$key->id}}" >
                                                        <tr class="t{{$ke->id}}" id="{{$key->id}}" >
                                                            <td style="text-align: center"><img class="img_t" style="width:70px" src="{{ $key->images ?? 'https://www.shafischools.com/images/service-bg/img-01.jpg'}}" alt="" /></td>
                                                            <td style="text-align: center" class="name_t">{{ $key->name }}</td>
                                                            <td style="text-align: center">
                                                                <button class="ps-setting">waiteing</button>
                                                            </td>
                                                            <td style="text-align: center" class="quan_t quan_t{{$ke->id}}" style="text-align: center">{{ $ke->required_quantity }}</td>
                                                            <td style="text-align: center" class="price_t">${{ $key->price }}</td>
                                                            <td class="price_t" style="color: yellow;text-align: center">{!! $key->number_evaluation !!}</td>
                                                            <td style="text-align: center"><button class="show_users_" id_pr="{{ $ke->id }}" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                                                            <td style="margin-left: 250px;width:60px;text-align: center">
                                                                <div class="input-group">
                                                                    <div class="input-group" style="width:50px">
                                                                        <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $ke->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $ke->id }}]">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                    </div>
                                                                    <input type="text" name="quant[{{ $ke->id }}]" class="input-number quant_pro{{ $ke->id }}" id="quant_pro{{ $ke->id }}" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                                                                    <div class="input-group plus">
                                                                        <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $ke->id }}" data-type="plus" data-field="quant[{{ $ke->id }}]">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="{{ $ke->id }}" type="button">Save</button>
                                                            </td>
                                                        </tr>
                                                @endforeach
                                                @endif
                                                @if(isset($ke->id_clothes))
                                                    @foreach(App\clothes::where('id',$ke->id_clothes)->get() as $key)
                                                    <tr class="t{{$ke->id}}" id="{{$key->id}}" >
                                                        <td style="text-align: center"><img class="img_t" style="width:70px" src="{{ $key->images ?? 'https://www.shafischools.com/images/service-bg/img-01.jpg'}}" alt="" /></td>
                                                        <td style="text-align: center" class="name_t">{{ $key->name }}</td>
                                                        <td style="text-align: center">
                                                            <button class="ps-setting">waiteing</button>
                                                        </td>
                                                        <td style="text-align: center" class="quan_t quan_t{{$ke->id}}" style="text-align: center">{{ $ke->required_quantity }}</td>
                                                        <td style="text-align: center" class="price_t">${{ $key->price }}</td>
                                                        <td class="price_t" style="color: yellow;text-align: center">{!! $key->number_evaluation !!}</td>
                                                        <td style="text-align: center"><button class="show_users_" id_pr="{{ $ke->id }}" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                                                        <td style="margin-left: 250px;width:60px;text-align: center">
                                                            <div class="input-group">
                                                                <div class="input-group" style="width:50px">
                                                                    <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $ke->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $ke->id }}]">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[{{ $ke->id }}]" class="input-number quant_pro{{ $ke->id }}" id="quant_pro{{ $ke->id }}" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                                                                <div class="input-group plus">
                                                                    <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $ke->id }}" data-type="plus" data-field="quant[{{ $ke->id }}]">
                                                                        <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="{{ $ke->id }}" type="button">Save</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                    @if(isset($ke->id_computers))
                                                        @foreach(App\computers::where('id',$ke->id_computers)->get() as $key)
                                                        <tr class="t{{$ke->id}}" id="{{$key->id}}" >
                                                            <td style="text-align: center"><img class="img_t" style="width:70px" src="{{ $key->images ?? 'https://www.shafischools.com/images/service-bg/img-01.jpg'}}" alt="" /></td>
                                                            <td style="text-align: center" class="name_t">{{ $key->name }}</td>
                                                            <td style="text-align: center">
                                                            <button class="ps-setting">waiteing</button>
                                                            </td>
                                                            <td style="text-align: center" class="quan_t quan_t{{$ke->id}}" style="text-align: center">{{ $ke->required_quantity }}</td>
                                                            <td style="text-align: center" class="price_t">${{ $key->price }}</td>
                                                            <td class="price_t" style="color: yellow;text-align: center">{!! $key->number_evaluation !!}</td>
                                                            <td style="text-align: center"><button class="show_users_" id_pr="{{ $ke->id }}" style="border: none;color: #fff;padding: 5px 15px;font-size: 15px;background-color: #2eb7f3;border-radius: 3px;">People who ordered</button></td>
                                                            <td style="margin-left: 250px;width:60px;text-align: center">
                                                                <div class="input-group">
                                                                    <div class="input-group" style="width:50px">
                                                                        <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $ke->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $ke->id }}]">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                    </div>
                                                                    <input type="text" name="quant[{{ $ke->id }}]" class="input-number quant_pro{{ $ke->id }}" id="quant_pro{{ $ke->id }}" style="color:brown;text-align: center"  data-min="1" data-max="200" value="1" readonly>
                                                                    <div class="input-group plus">
                                                                        <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $ke->id }}" data-type="plus" data-field="quant[{{ $ke->id }}]">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <button class="btn save_ch" style="color: forestgreen;margin: 1% 30%" id_pr="{{ $ke->id }}" type="button">Save</button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                        @endforeach
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area" style="position: relative;width:100%;bottom: 0%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved. create by adly_nady and beshoy_nady</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="try/js/vendor/jquery-1.12.4.min.js"></script>
<script src="try/js/bootstrap.min.js"></script>
<script src="try/js/jquery.meanmenu.js"></script>
<script src="try/js/jquery.sticky.js"></script>
<script src="try/js/metisMenu/metisMenu.min.js"></script>
<script src="try/js/metisMenu/metisMenu-active.js"></script>
<script src="try/js/plugins.js"></script>
<script src="try/js/main.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Slicknav JS -->
<script src="js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="js/magnific-popup.js"></script>
<!-- Fancybox JS -->
<script src="js/facnybox.min.js"></script>
<!-- Waypoints JS -->
<script src="js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="js/nicesellect.js"></script>
<!-- Ytplayer JS -->
<script src="js/ytplayer.min.js"></script>
<!-- Flex Slider JS -->
<script src="js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="js/easing.js"></script>
<!-- Active JS -->
<script src="js/active.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    Pusher.logToConsole = true;
        var pusher = new Pusher('7a783e2d8aa18dbc528e', {
            cluster: 'eu'
        });
    $(document).ready(function event(){

      var channel = pusher.subscribe('who_do_orde');
        channel.bind('App\\Events\\who_do_order', function(data){
            if(data.case == 'Done')
            {
                $.ajax({
                    type: "POST",
                    url: "{{ route('get_all_data_order') }}",
                    data: {'_token':'{{ csrf_token() }}'},
                    success:function(data){
                        $('.body_table').html(data);
                        event();
                    },error:function(){
                        alert('error in your mission');
                    }
                });
            }
        });

        $('.save_ch').click(function (){
            var i_d=$(this).attr('id_pr');
            var val_t=$('.quant_pro'+i_d).val();
            $.ajax({
                type: "POST",
                url: "{{ route('set_qun_some_pro') }}",
                data: {'_token':'{{ csrf_token() }}','id':i_d,'value':val_t},
                success:function(data){
                    if(data.val == 'delete')
                    {
                        $('.quant_pro'+i_d).val(1);
                        $('.t'+i_d).remove();
                    }
                    else if(data.val == 'update')
                    {
                        $('.quant_pro'+i_d).val(1);
                        $('.quan_t'+i_d).text(data.dat_val);
                    }
                },error:function(){
                    alert('error! in your date ');
                }
            });
        });
        $('.logout').on('click',function (){
            $.ajax({
                type: "POST",
                url: "{{ route('logout') }}",
                data: {'_token':'{{ csrf_token() }}'}
            });
        });
        $('.show_users_').click(function (event) {
            event.preventDefault();
            var id_=$(this).attr('id_pr');
            $.ajax({
                type: "POST",
                url: "{{ route('show_user_ordered') }}",
                data: {'_token':'{{ csrf_token() }}','id_p':id_},
                success:function (data){
                        $('.handel_cover').fadeIn(function () {
                            $('.ex').click(function (){
                            $('.handel_cover').fadeOut();
                        });
                    });
                    $('.handel_thing').html(data);
                    event();
                },error:function(){
                    alert('error !');
                }
            });
        });
            $('.drop').on('click',function (e){
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });
        $('.plus_btn').click(function () {
            $('.minus_btn').removeAttr("disabled");
        });
        $('.minus_btn').click(function () {
            var v=$('.quant_pro').val();
            if(v==0){
            $('.minus_btn').attr("disabled","disabled");
            }
        })
    });
</script>
</body>

</html>

{{--

    +--------------------action--------------------------+
    |       <button class="ps-setting">Paused</button>   |
    |       <button class="pd-setting">Active</button>   |
    |       <button class="ds-setting">Disabled</button> |
    +----------------------------------------------------+


                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.show_pro_t').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });

--}}
