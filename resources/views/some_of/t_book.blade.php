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
</head>

<body>
    <div class="cover_form">
        <form class="box_images_" method="post" id="box_images_" enctype="multipart/form-data">
            @csrf
            <h3> select images</h3>
            <button type="button" class="exit_"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg></button>
            <input type="hidden" class="_img_1" name="_img_1"/>
            <input type="hidden" class="_img_2" name="_img_2"/>
            <input type="hidden" class="_img_3" name="_img_3"/>
            <input type="hidden" class="_img_4" name="_img_4"/>

            <input type="file" class="img_1" name="img_1"/>
            <input type="file" class="img_1" name="img_2"/>
            <input type="file" class="img_1" name="img_3"/>
            <input type="file" class="img_1" name="img_4"/>
            <span class="check_up_or_ad">
            </span>

        </form>
    </div>
<div class="left-sidebar-pro">
    @include('body.nave')
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area" >
        <div class="header-top-area" style="box-shadow: 0px 0px 10px 1px white">
            <div class="container-fluid">
                <div class="row" >
                    @include('body.site_nav')
                </div>
            </div>
        </div>
    <!-- Mobile Menu start
        @include('body.box_site')-->
        {{--  show alert forms--}}
        @include('some_of.books')
        <br><br><br>
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
                            <h4>Products List (Books)</h4>
                            <div class="add-product">
                                <button type="button" class="button_dark">Add Product</button>
                            </div>
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>name</th>
                                    <th>cases</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                    <th>the evaluation</th>
                                    <th>Setting</th>
                                </tr>
                                <tbody class="body_table">
                                <form method="post" class="form_table" enctype="multipart/form-data">
                                    @csrf
                                        @foreach(App\books::get()->chunk(10) as $ke)
                                            @foreach($ke as $key)
                                                <tr class="t{{$key->id}}" id="{{$key->id}}" >
                                                    <td><img class="img_t" src="{{ $key->images ?? 'https://www.shafischools.com/images/service-bg/img-01.jpg'}}" alt="" /></td>
                                                    <td class="name_t">{{ $key->name }}</td>
                                                    <td>
                                                        @if($key->quantity > 4)
                                                            <button class="pd-setting">ِِAlright</button>
                                                        @elseif($key->quantity < 3)
                                                            <button class="ds-setting">Danger</button>
                                                        @else
                                                            <button class="ps-setting">May expire</button>
                                                        @endif
                                                    </td>
                                                    <td class="quan_t">{{ $key->quantity }}</td>
                                                    <td class="price_t">${{ $key->price }}</td>
                                                    <td class="price_t" style="color: yellow">{!! $key->number_evaluation !!}</td>
                                                    <td>
                                                        @foreach(DB::table('images')->where('id_books',$key->id)->get() as $k => $val)
                                                            <input type="hidden" class="{{ Str::slug($key->name,'_').'_'.$k }}" id_{{ $k }}="{{ $val->id }}">
                                                        @endforeach
                                                        <button type="submit" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="{{ $key->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button type="submit" data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="{{ $key->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{--  SELECT COLUMN_NAME FROM information_schema.columns WHERE table_schema = 'e-commerce' AND table_name = 'books'  --}}
                                        @endforeach
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    $(document).ready(function (){
        $('.logout').on('click',function (){
            $.ajax({
                type: "POST",
                url: "{{ route('logout') }}",
                data: {'_token':'{{ csrf_token() }}'}
            });
        });
        $('.button_dark').on('click',function (){
            $('.name').val(null);
            $('.color').val(null);
            $('.size').val(null);
            $('.Quantity').val(null);
            $('.description').val(null);
            $('.price').val(null);
            $('.Discount').val(null);
            $('#evaluation').val(null);
            $('.type').val(null);
            $('.update').hide();
            $('.save').show();
            $('.show_pro_t').fadeIn(function (){
                $('.ex').on('click',function (){
                    $('.show_pro_t').fadeOut();
                });
            });
        });
//_____________ insert in car
        $('.save').on('click',function (e){
            e.preventDefault();
            var data=new FormData($('#form_da')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('insert_data_e4') }}",
                data: data,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.body_table').html(D);

        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
            $('.button_dark').on('click',function (e){
                e.preventDefault();
                $('.name').val(null);
                $('.color').val(null);
                $('.size').val(null);
                $('.Quantity').val(null);
                $('.passengers').val(null);
                $('.price').val(null);
                $('.Discount').val(null);
                $('#evaluation').val(null);
                $('.type').val(null);
                $('.update').hide();
                $('.save').show();
                $('.show_pro_t').fadeIn(function (){
                    $('.ex').on('click',function (e){
                        e.preventDefault();
                        $('.show_pro_t').fadeOut();
                    });
                });
            });
            $('.edit').on('click',function (e){ /*drop*/
                e.preventDefault();
                $('.update').show();
                $('.save').hide();
                var id_event=$(this).attr('id');
                $('.show_pro_t').fadeIn(function (){
                    $.ajax({
                        type: "post",
                        url: "{{ route('edite_data') }}",
                        data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                        success:function (D){//
                            $('.name').val(D.name);
                            $('.color').val(D.color);
                            $('.size').val(D.size);
                            $('.Quantity').val(D.quantity);
                            $('.passengers').val(D.passengers);
                            $('.price').val(D.price);
                            $('.Discount').val(D.Discount);
                            $('#evaluation').val(D.number_evaluation);
                            $('.type').val(D.Type_id);
                            $('.hidden').attr('value',id_event);
                            $('.ex').on('click',function (e){
                                e.preventDefault();
                                $('.show_pro_t').fadeOut();
                            });
                        },error:function (){
                            alert('do_error');
                        }
                    });
                });
            });

            $('.drop').on('click',function (e){ /*not_delete row*/
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });

                    $('.show_pro_t').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
        $('.edit').on('click',function (e){ /*drop*/
            e.preventDefault();
            $('.update').show();
            $('.save').hide();
            var id_event=$(this).attr('id');
            $('.show_pro_t').fadeIn(function (){
                $.ajax({
                    type: "post",
                    url: "{{ route('edite_data_e4') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//

        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
            $('.button_dark').on('click',function (e){
                e.preventDefault();
                $('.name').val(null);
                $('.color').val(null);
                $('.size').val(null);
                $('.Quantity').val(null);
                $('.passengers').val(null);
                $('.price').val(null);
                $('.Discount').val(null);
                $('#evaluation').val(null);
                $('.type').val(null);
                $('.update').hide();
                $('.save').show();
                $('.show_pro_t').fadeIn(function (){
                    $('.ex').on('click',function (e){
                        e.preventDefault();
                        $('.show_pro_t').fadeOut();
                    });
                });
            });
            $('.edit').on('click',function (e){ /*drop*/
                e.preventDefault();
                $('.update').show();
                $('.save').hide();
                var id_event=$(this).attr('id');
                $('.show_pro_t').fadeIn(function (){
                    $.ajax({
                        type: "post",
                        url: "{{ route('edite_data') }}",
                        data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                        success:function (D){//
                            $('.name').val(D.name);
                            $('.color').val(D.color);
                            $('.size').val(D.size);
                            $('.Quantity').val(D.quantity);
                            $('.passengers').val(D.passengers);
                            $('.price').val(D.price);
                            $('.Discount').val(D.Discount);
                            $('#evaluation').val(D.number_evaluation);
                            $('.type').val(D.Type_id);
                            $('.hidden').attr('value',id_event);
                            $('.ex').on('click',function (e){
                                e.preventDefault();
                                $('.show_pro_t').fadeOut();
                            });
                        },error:function (){
                            alert('do_error');
                        }
                    });
                });
            });

            $('.drop').on('click',function (e){ /*not_delete row*/
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });

                        $('.name').val(D.name);
                        $('.color').val(D.color);
                        $('.size').val(D.size);
                        $('.Quantity').val(D.quantity);
                        $('.description').val(D.description);
                        $('.price').val(D.price);
                        $('.Discount').val(D.Discount);
                        $('.evaluation').val(D.number_evaluation);
                        $('.type').val(D.type_id);
                        $('.hidden').attr('value',id_event);
                        $('.ex').on('click',function (){
                            $('.show_pro_t').fadeOut();
                        });
                    },error:function (){
                        alert('do_error');
                    }
                });
            });
        });

        $('.drop').on('click',function (e){ /*not_delete row*/
            e.preventDefault();
            var id_event=$(this).attr('atrs_da');
            $.ajax({
                type: "post",
                url: "{{ route('delete_data_e4') }}",
                data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                success:function (D){//

        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
            $('.button_dark').on('click',function (e){
                e.preventDefault();
                $('.name').val(null);
                $('.color').val(null);
                $('.size').val(null);
                $('.Quantity').val(null);
                $('.passengers').val(null);
                $('.price').val(null);
                $('.Discount').val(null);
                $('#evaluation').val(null);
                $('.type').val(null);
                $('.update').hide();
                $('.save').show();
                $('.show_pro_t').fadeIn(function (){
                    $('.ex').on('click',function (e){
                        e.preventDefault();
                        $('.show_pro_t').fadeOut();
                    });
                });
            });
            $('.edit').on('click',function (e){ /*drop*/
                e.preventDefault();
                $('.update').show();
                $('.save').hide();
                var id_event=$(this).attr('id');
                $('.show_pro_t').fadeIn(function (){
                    $.ajax({
                        type: "post",
                        url: "{{ route('edite_data') }}",
                        data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                        success:function (D){//
                            $('.name').val(D.name);
                            $('.color').val(D.color);
                            $('.size').val(D.size);
                            $('.Quantity').val(D.quantity);
                            $('.passengers').val(D.passengers);
                            $('.price').val(D.price);
                            $('.Discount').val(D.Discount);
                            $('#evaluation').val(D.number_evaluation);
                            $('.type').val(D.Type_id);
                            $('.hidden').attr('value',id_event);
                            $('.ex').on('click',function (e){
                                e.preventDefault();
                                $('.show_pro_t').fadeOut();
                            });
                        },error:function (){
                            alert('do_error');
                        }
                    });
                });
            });

            $('.drop').on('click',function (e){ /*not_delete row*/
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });

                    $('.not_delete').slideDown(function () {
                        $('.not_delete').delay(5000).slideUp();
                    });
                    $('.t'+id_event).remove();
                },error:function (){
                    alert('do_error');
                }
            });
        });
        $('.search_data').on('keyup',function (){
            $.ajax({
                type: "post",
                url: "{{ route('search_data_cars_e4') }}",
                data:{'_token':'{{ csrf_token() }}','data_search':$(this).val()},
                success:function (D){//
                    $('.body_table').html(D);

        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
            $('.button_dark').on('click',function (e){
                e.preventDefault();
                $('.name').val(null);
                $('.color').val(null);
                $('.size').val(null);
                $('.Quantity').val(null);
                $('.passengers').val(null);
                $('.price').val(null);
                $('.Discount').val(null);
                $('#evaluation').val(null);
                $('.type').val(null);
                $('.update').hide();
                $('.save').show();
                $('.show_pro_t').fadeIn(function (){
                    $('.ex').on('click',function (e){
                        e.preventDefault();
                        $('.show_pro_t').fadeOut();
                    });
                });
            });
            $('.edit').on('click',function (e){ /*drop*/
                e.preventDefault();
                $('.update').show();
                $('.save').hide();
                var id_event=$(this).attr('id');
                $('.show_pro_t').fadeIn(function (){
                    $.ajax({
                        type: "post",
                        url: "{{ route('edite_data') }}",
                        data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                        success:function (D){//
                            $('.name').val(D.name);
                            $('.color').val(D.color);
                            $('.size').val(D.size);
                            $('.Quantity').val(D.quantity);
                            $('.passengers').val(D.passengers);
                            $('.price').val(D.price);
                            $('.Discount').val(D.Discount);
                            $('#evaluation').val(D.number_evaluation);
                            $('.type').val(D.Type_id);
                            $('.hidden').attr('value',id_event);
                            $('.ex').on('click',function (e){
                                e.preventDefault();
                                $('.show_pro_t').fadeOut();
                            });
                        },error:function (){
                            alert('do_error');
                        }
                    });
                });
            });

            $('.drop').on('click',function (e){ /*not_delete row*/
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });

                },error:function (){
                    alert('do_error');
                }
            });
        });
        $('.update').on('click',function (e){
            e.preventDefault();
            var data=new FormData($('#form_da')[0]);
            var ID=$('.hidden').attr('value');
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('update_data_e4') }}",
                data: data,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){//
                    $('.t'+ID).html(D);

        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
            $('.button_dark').on('click',function (e){
                e.preventDefault();
                $('.name').val(null);
                $('.color').val(null);
                $('.size').val(null);
                $('.Quantity').val(null);
                $('.passengers').val(null);
                $('.price').val(null);
                $('.Discount').val(null);
                $('#evaluation').val(null);
                $('.type').val(null);
                $('.update').hide();
                $('.save').show();
                $('.show_pro_t').fadeIn(function (){
                    $('.ex').on('click',function (e){
                        e.preventDefault();
                        $('.show_pro_t').fadeOut();
                    });
                });
            });
            $('.edit').on('click',function (e){ /*drop*/
                e.preventDefault();
                $('.update').show();
                $('.save').hide();
                var id_event=$(this).attr('id');
                $('.show_pro_t').fadeIn(function (){
                    $.ajax({
                        type: "post",
                        url: "{{ route('edite_data') }}",
                        data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                        success:function (D){//
                            $('.name').val(D.name);
                            $('.color').val(D.color);
                            $('.size').val(D.size);
                            $('.Quantity').val(D.quantity);
                            $('.passengers').val(D.passengers);
                            $('.price').val(D.price);
                            $('.Discount').val(D.Discount);
                            $('#evaluation').val(D.number_evaluation);
                            $('.type').val(D.Type_id);
                            $('.hidden').attr('value',id_event);
                            $('.ex').on('click',function (e){
                                e.preventDefault();
                                $('.show_pro_t').fadeOut();
                            });
                        },error:function (){
                            alert('do_error');
                        }
                    });
                });
            });

            $('.drop').on('click',function (e){ /*not_delete row*/
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });

                    $('.show_pro_t').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
        $('.images').click(function(e){
            e.preventDefault();
            $('.cover_form').fadeIn(function () {
                $('.exit_').click(function () {
                    $('.cover_form').fadeOut();
                });
            });
                $.ajax({
                    type: "post",
                    url: "{{ route('select_img_') }}",
                    data:{'_token':'{{ csrf_token() }}','id_img':$(this).attr('id_img'),'name_t':$(this).attr('name_t'),'imag_na':$(this).attr('n_get_img')},
                    success:function (data){
                        var id_0=$('.'+data.name_f_g_id+'_0').attr('id_0');
                        var id_1=$('.'+data.name_f_g_id+'_1').attr('id_1');
                        var id_2=$('.'+data.name_f_g_id+'_2').attr('id_2');
                        var id_3=$('.'+data.name_f_g_id+'_3').attr('id_3');
                        $('._img_1').val(id_0);
                        $('._img_2').val(id_1);
                        $('._img_3').val(id_2);
                        $('._img_4').val(id_3);
                        $('.check_up_or_ad').html(data.body);
                    }
            });
        });
        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
        function all(){
        $('.save_img').click(function (event) {
            event.preventDefault();
            var dataa=new FormData($('#box_images_')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('add_or_update') }}",
                data: dataa,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.cover_form').fadeOut();
                    $('.sh').slideDown(function () {
                        $('.sh').delay(5000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });
            $('.button_dark').on('click',function (e){
                e.preventDefault();
                $('.name').val(null);
                $('.color').val(null);
                $('.size').val(null);
                $('.Quantity').val(null);
                $('.passengers').val(null);
                $('.price').val(null);
                $('.Discount').val(null);
                $('#evaluation').val(null);
                $('.type').val(null);
                $('.update').hide();
                $('.save').show();
                $('.show_pro_t').fadeIn(function (){
                    $('.ex').on('click',function (e){
                        e.preventDefault();
                        $('.show_pro_t').fadeOut();
                    });
                });
            });
            $('.edit').on('click',function (e){ /*drop*/
                e.preventDefault();
                $('.update').show();
                $('.save').hide();
                var id_event=$(this).attr('id');
                $('.show_pro_t').fadeIn(function (){
                    $.ajax({
                        type: "post",
                        url: "{{ route('edite_data') }}",
                        data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                        success:function (D){//
                            $('.name').val(D.name);
                            $('.color').val(D.color);
                            $('.size').val(D.size);
                            $('.Quantity').val(D.quantity);
                            $('.passengers').val(D.passengers);
                            $('.price').val(D.price);
                            $('.Discount').val(D.Discount);
                            $('#evaluation').val(D.number_evaluation);
                            $('.type').val(D.Type_id);
                            $('.hidden').attr('value',id_event);
                            $('.ex').on('click',function (e){
                                e.preventDefault();
                                $('.show_pro_t').fadeOut();
                            });
                        },error:function (){
                            alert('do_error');
                        }
                    });
                });
            });

            $('.drop').on('click',function (e){ /*not_delete row*/
                e.preventDefault();
                var id_event=$(this).attr('atrs_da');
                $.ajax({
                    type: "post",
                    url: "{{ route('delete_data') }}",
                    data:{'_token':'{{ csrf_token() }}','id_thing':id_event},
                    success:function (D){//
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(5000).slideUp();
                        });
                        $('.t'+id_event).remove();
                    },error:function (){
                        alert('do_error');
                    }
                });
            });

        }
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

--}}
