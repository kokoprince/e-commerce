<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DreamShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    <style>
        .animated{
        margin-right:600px;
        }
    </style>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

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
        {{-- body --}}
        @include("some_of.L2")
    <div class="footer-copyright-area" style="position: absolute;bottom:0%;left:0%;width:100%">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;
    var pusher = new Pusher('7a783e2d8aa18dbc528e', {
    cluster: 'eu'
    });
    $(document).ready(function (){

        $('.logout').on('click',function (){
            $.ajax({
                type: "POST",
                url: "{{ route('logout') }}",
                data: {'_token':'{{ csrf_token() }}'}
            });
        });
        $('.btne_cl').on('click',function (e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('event_dashboard') }}",
                data: {'_token':'{{ csrf_token() }}','name_section':$(this).text()}
            });
        });

    });
</script>
</body>

</html>
