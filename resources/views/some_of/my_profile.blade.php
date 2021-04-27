<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DreamShop</title>
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
        .style_btn{
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
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<style>
    .eror_old_pass{
        color:red;
    }
    .eror_new_pass{
        color:red;
    }
</style>
<div class="cover_form">
    <form class="box_images_" method="post" id="box_images_" enctype="multipart/form-data">
        @csrf
        <h3> A change password </h3>
        <button type="button" class="exit_"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg></button>
        <br>
        <div class="form-group">
          <label for="">enter your old password</label>
          <input type="password" class="form-control old_pass" name="" id="" aria-describedby="helpId" placeholder="enter now ">
          <h2 id="helpId" class="form-text eror_old_pass" color="red"></h2>
        </div>
        <div class="form-group">
            <label for="">enter your new password</label>
            <input type="password" class="form-control new_pass" name="" id="" aria-describedby="helpId" placeholder="enter now ">
            <h2 id="helpId" class="form-text eror_new_pass" color="red"></h2>
          </div>
          <br>
        <span class="check_up_or_ad">
            <button type="button" class="btn btn-outline-success cheng_pass" style="bottom: 0px">cheng password</button>
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
        <br><br><br>
        <div class="alert alert-success sh" style="width:250px;text-align:center;display:none;position: fixed;left: 14%;top: 17.5%;z-index: 99999;" role="alert">
            Done success !
        </div>
        <div class="alert alert-danger not_delete" style="width:250px;text-align:center;display:none;position: fixed;left: 14%;top: 17.5%;z-index: 99999;" role="alert">
            Deleted !
        </div>
        <div class="product-status mg-b-30" style="height: 34.4pc;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <style type="text/css" rel="stylesheet">
                                .input-group{
                                    margin-left: 65%;
                                }
                                .form-control{
                                    text-align: center;
                                    width: 100%;
                                }
                            </style>
                                <form method="post" class="form_table" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <p class="text_sectionP"><img class="img_of_user" src="{{ Auth::guard('admin')->user()->images }}" style="width: 150px;border-radius: 10px"></p>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt col-md-10">
                                <span class="input-group-addon"><svg width="1.6em" height="1em" viewBox="5 0 -900 0" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 0 .93-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                </svg></span>
                                                    <input type="file" class="form-control img" value="{{ Auth::guard('admin')->user()->images }}" name="img">
                                                </div>
                                                <div class="input-group mg-b-pro-edt col-md-10">
                                                    <span class="input-group-addon">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                                        </svg>
                                                    </span>
                                                    <input type="text" class="form-control name" name="name" value="{{ Auth::guard('admin')->user()->name }}" placeholder="If  You Want Change Your Name">
                                                </div>
                                                <div class="input-group mg-b-pro-edt col-md-10">
                                                    <span class="input-group-addon">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                          <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                                        </svg>
                                                    </span>
                                                    <input type="text" class="form-control email" name="email" value="{{ Auth::guard('admin')->user()->email }}" placeholder="If  You Want Change Your email">
                                                </div>
                                                <div class="input-group mg-b-pro-edt col-md-10">
                                                    <span class="input-group-addon">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-badge" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                          <path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 0 1 4.5 0h7A2.5 2.5 0 0 1 14 2.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2.5zM4.5 1A1.5 1.5 0 0 0 3 2.5v10.795a4.2 4.2 0 0 1 .776-.492C4.608 12.387 5.937 12 8 12s3.392.387 4.224.803a4.2 4.2 0 0 1 .776.492V2.5A1.5 1.5 0 0 0 11.5 1h-7z"/>
                                                          <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM6 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
                                                        </svg>
                                                    </span>
                                                    <input type="text" class="form-control phone" name="phone"  value="{{ Auth::guard('admin')->user()->phone }}" placeholder="If  You Want Change Your phone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-center custom-pro-edt-ds">
                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10 save">Save
                                        </button>
                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10 change">
                                            change password
                                        </button>
                                    </div>
                                </div>
                            </div>
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
<script src="try/js/wow.min.js"></script>
<script src="try/js/jquery-price-slider.js"></script>
<script src="try/js/jquery.meanmenu.js"></script>
<script src="try/js/owl.carousel.min.js"></script>
<script src="try/js/jquery.sticky.js"></script>
<script src="try/js/jquery.scrollUp.min.js"></script>
<script src="try/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="try/js/scrollbar/mCustomScrollbar-active.js"></script>
<script src="try/js/metisMenu/metisMenu.min.js"></script>
<script src="try/js/metisMenu/metisMenu-active.js"></script>
<script src="try/js/sparkline/jquery.sparkline.min.js"></script>
<script src="try/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="try/js/calendar/moment.min.js"></script>
<script src="try/js/calendar/fullcalendar.min.js"></script>
<script src="try/js/calendar/fullcalendar-active.js"></script>
<script src="try/js/flot/jquery.flot.js"></script>
<script src="try/js/flot/jquery.flot.resize.js"></script>
<script src="try/js/flot/jquery.flot.pie.js"></script>
<script src="try/js/flot/jquery.flot.tooltip.min.js"></script>
<script src="try/js/flot/jquery.flot.orderBars.js"></script>
<script src="try/js/flot/curvedLines.js"></script>
<script src="try/js/flot/flot-active.js"></script>
<script src="try/js/plugins.js"></script>
<script src="try/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){//save
        $('.logout').on('click',function (){
            $.ajax({
                type: "POST",
                url: "{{ route('logout') }}",
                data: {'_token':'{{ csrf_token() }}'}
            });
        });
        $('.save').on('click',function (e){
            e.preventDefault();
            var data=new FormData($('.form_table')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('update_profile') }}",
                data: data,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.img_of_user').attr('src',D.image);
                    $('.name_for_user').text(D.name);
                    $('.sh').slideDown(function () {
                        $('.sh').delay(4000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
                }
            });
        });

        $('.exit_').on('click',function (e){
            e.preventDefault();
            $('.cover_form').fadeOut();
        });
        $('.change').on('click',function (e){
            e.preventDefault();
            $('.cover_form').fadeIn();
        });
        $('.cheng_pass').click(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('cheng_pass') }}",
                data: {'_token':'{{ csrf_token() }}','pass_old':$('.old_pass').val(),'pass_new':$('.new_pass').val()},
                success:function (data) {
                    if(data == 'Done'){
                        $('.eror_old_pass').text(null);
                        $('.eror_new_pass').text(null);
                        $('.cover_form').fadeOut();
                        $('.sh').slideDown(function () {
                            $('.sh').delay(5000).slideUp();
                        });
                    }else if(data == 'password is no right'){
                        $('.eror_old_pass').text(data);
                        $('.eror_new_pass').text(null);
                    }else if(data == 'no request'){
                        $('.eror_old_pass').text(data);
                        $('.eror_new_pass').text(data);
                    }
                }
            });
        });
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
