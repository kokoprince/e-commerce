<!DOCTYPE html>
<html lang="en" style="background:white">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Title Tag  -->
    <title>DreamShop</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="try/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="try/css/owl.carousel.css">
    <link rel="stylesheet" href="try/css/owl.theme.css">
    <link rel="stylesheet" href="try/css/owl.transitions.css">
    <link rel="stylesheet" href="try/style.css">
    <link rel="stylesheet" href="try/css/responsive.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="try/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <style>
     .img_one{
        min-height: 300px;
     }
        .num_iteam{
            height:0px;
            position: absolute;
            right: -5px;
            top:0px;
            font-size: 12.5px;
            padding-bottom:25px;
            padding-top:-25px;
            padding-left:2px;
            padding-right:2px;
            z-index:10000;
            display: inline-block;
            background-color: rgba(255, 28, 28, 0.932);
            color:white;
            border-radius: 200px;
        }
    .notifi_be{
    cursor: pointer;
    }
    .list_notifi{
        width:410px;
        height:400px;
        border-radius: 5px;
        border:none;
        position: absolute;
        top:110%;
        left:-290px;
        box-shadow: 0px 0px 10px 1px gray;
        display:none;
        overflow-y:scroll;
        z-index:99;
    }
    .cover_list{
        position: relative;
        left:0%;
        top:0%;
        width:100%;
        height:100%;
        background:#fff;
        border-radius: 5px;
        border:none;
    }
    .head_list{
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
        position: relative;
        left:0%;
        top:0%;
        background: #4755ab;
        width:100%;
        height:15%;
        color:white;
    }
    .head_list h3{
        padding:15px;
        font-size:20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-family: Imprint MT Shadow;
    }
    .body_list{
        width:100%;
        height:85%;
        position: relative;
        left:0%;
        top:0%;
        border:none;
    }
    .cover_notif{
        position: fixed;
        right:0.5%;
        bottom:0.5%;
        width:415px;
        height:150px;
        border:none;
        overflow: hidden;
        padding-top:22px;
        z-index:999;
    }
    .toast{
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 1;
    border-radius: 0.25rem;
    position:relative;
    left:0px;
    top:5px;
    color:rgb(119, 0, 255);
    overflow: hidden;
    }
    .toast:not(.showing):not(.show){
        opacity:1;
    }
    .b_close{
        display:block;
        position: absolute;
        right:3%;
        top:5%;
        opacity: 1;
        border:1px solid #4755ab;
    }
    .toast small{
        position: absolute;
        right:5%;
        top:4%;
    }
    .number_notif{
    background-color: rgba(255, 0, 0, 0.85);
    width:5px;
    height:5px;
    padding:1.3px;
    border-radius: 10px;
        position: relative;
        right:6.5px;
        top:-5px;
        color:white;
        font-size:12px;
    }
    .mov{
        position:relative;
        left:-70%;
        top:5%;
        color:#ffc107;
    }
    </style>

</head>
<body class="js" style="background:white" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.984.0">

	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
    <header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                            @auth('admin')
                                <li><i class="ti-user"></i> <a href="{{ route('dashboard') }}">My account Admin</a></li>
                            @endauth
                            @auth('web')
                                <li><i class="ti-user"></i> <a href="{{ route('profile') }}">My account User</a></li>
                            @endauth
                            @if(!Auth::check())
                            <li><i class="ti-power-off"></i><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option selected="selected">All Category</option>
                                <option>watch</option>
                                <option>mobile</option>
                                <option>kid’s item</option>
                            </select>
                            <form>
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            @auth('admin')
                                <a href="{{ route('dashboard') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            @endauth
                            @auth('web')
                                <a href="{{ route('profile') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"> </i><br/><p style="position: absolute;left: -12.5px;">{{ Auth::user()->name }}</p></a>
                            @endauth
                        </div>
                                      <div class="sinlge-bar shopping">
                                    <div class="product-action show_best_list def_co{{@ $key->id }}">
                                    <!-- Shopping Item -->
                                <a title="go to cart" href="{{ route('cart') }}" class="single-icon">
                                    @auth('web')
                                    @if(collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count() > 0)
                                    <span class="num_iteam">{{ collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count() }}</span>
                                    @endif
                                    @endauth
                                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                  </svg></a>
                                    <!--/ End Shopping Item -->
                                </div>
                            </div>
                            @auth('web')

                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-bell notifi_be" viewBox="0 0 16 16">

                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                <span class="list_notifi">
                                    <div class="cover_list">
                                        <div class="head_list">
                                            <h3>Notification</h3>
                                        </div>
                                        <div class="">
                                            <ul class="dropdown-menu show body_list">
                                            @if(collect(DB::table('notification')->get())->isEmpty())
                                            <li style="margin-top: 5px;margin-bottom: 5px;width:100%;color:black">
                                            <h2 style="margin-left: 25%;margin-top:15%;font-size:40px;color:gray">nothing</h2>
                                            </li>
                                            @endif
                                            @foreach(DB::table('notification')->get() as $valu)
                                            @if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                        <li style="margin-top: 5px;margin-bottom: 5px;width:100%;color:black"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
                                                        <div  class="toast_"style="width:100%;box-shadow: 0px 0px 10px 1px gray;">
                                                            <div class="toast-header">
                                                            <strong class="me-auto">DreamShop</strong>
                                                            <small class="small{{$valu->id}}" style="margin-left:40%">{{ $valu->date }}</small>
                                                            </div>
                                                            <div class="toast-body" style="color: black;font-size:13.5px">
                                                                {{ $valu->content }}
                                                            </div>
                                                        </div></li>
                                                        @else
                                                        <li style="margin-top: 5px;margin-bottom: 5px;width:100%;color:black"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
                                                            <div  class="toast_"style="width:100%;box-shadow: 0px 0px 10px 1px gray;">
                                                                <div class="toast-header">
                                                                <strong class="me-auto">DreamShop</strong>
                                                                <small class="small{{$valu->id}}" style="margin-left:30%"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye mov" viewBox="0 0 16 16">
                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                                </svg>{{ $valu->date }}</small>
                                                                </div>
                                                                <div class="toast-body" style="color: black;font-size:13.5px">
                                                                    {{ $valu->content }}
                                                                </div>
                                                            </div></li>
                                                        @endif
                                                    @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                                <span class="number_notif" k="{{ $vars=0 }}">
                                    {{ collect(DB::select("SELECT notification.id FROM notification, see_notification WHERE notification.id != see_notification.id_notification"))->count() }}
                                </span>
                            </svg>
                            @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="{{ route('DreamShop') }}">Home</a></li>
                                            <li><a href="{{ route('Grid') }}">Shop Grid</a></li>
                                            <li><a href="{{ route('cart') }}">Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Shop Grid</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<style>
    .single-product-details{
        color: #152036;
    }
</style>
<!-- Product Style -->
<section class="product-area shop-sidebar shop section" style="background: white;color: #212529">
    <div class="single-product-tab-area mg-t-0 mg-b-30" style="background: white;color: #212529">
                <div class="col-lg-12">{{----}}
                    <div class="single-product-pr" style="background: #F6F7FB;color: #152036;">
                        <div class="row ttz">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div id="myTabContent1" class="tab-content">
                                        <img src="{{ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->images }}" class="img_one" style="min-width:300px" alt="#">
                                </div>
                                <style>
                                    .image_se{
                                        float:left;
                                    }
                                </style>
                                <ul id="single-product-tab" style="width: 600px;overflow-x: scroll;top:200px;">
                                    @if (collect(DB::table('images')->where('id_'.session()->get('the_pro') , session()->get('id_pro'))->get())->isEmpty())
                                    <div style="min-width:auto">
                                        @else
                                    <div style="min-width: 900px;height: 200px">
                                    @endif
                                        <li class="image_se" style="width: 180px;height: 190px;">{{-- active --}}
                                            <img src="{{ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->images }}" style="width: 180px;height: 150px;" class="image_img" alt="#">
                                        </li>
                                        @foreach (DB::table('images')->where('id_'.session()->get('the_pro') , session()->get('id_pro'))->get() as $k)
                                        <li class="image_se" style="width: 180px;height: 190px;">{{-- active --}}
                                            <img src="{{ $k->images }}" style="width: 180px;height: 150px;" class="image_img" alt="#">
                                        </li>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-details res-pro-tb">
                                    <h1>{{ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->name }}</h1>
                                    <span class="single-pro-star">	@switch (DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->number_evaluation)
                                            @case (1)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (1.5)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (2)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (2.5)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (3)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (3.5)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (4)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break

                                            @case (4.5)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break
                                            @case (5)
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                </svg>
                                            @break

                                            @default
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                </svg>
                                            @break
                                        @endswitch
										</span>
                                    <div class="single-pro-price">
                                        <span class="single-regular">${{ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->price }}</span><span class="single-old"><del>${{ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->old_price }}</del></span>
                                    </div>
                                    <div class="single-pro-size">

                                        @if(session()->get('the_pro') != 'books')
                                        <h6>Size</h6>
                                        @isset(DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->size)
                                        <input type="hidden" value="{{ $vt=DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->size }}">
                                        <span style="width: auto;font-size: 15px">{{ Illuminate\Support\Str::of($vt)->replace(',', ' - ') }}</span> {{--<span>M</span>--}}
                                        @endisset
                                    </div>
                                    <div class="color-quality-pro">
                                        <div class="color-quality-details">
                                            <h5>Color</h5>
                                            <span style="min-width: 25px;min-height: 25px;background-color:{{@ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->color }}"></span>
                                            @endif
                                            @if(DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->quantity == 0)
                                            <br><br>
                                            <h4>This product has expired !</h4>
                                            <h5>You can order quantity</h5><br>
                                            <div class="input-group">
                                                <div class="button minus">
                                                    <button type="button" class="btn btn-number minus_btn" disabled="disabled" id="{{@ session()->get('id_pro') }}" data-type="minus" data-field="quant[{{@ session()->get('id_pro') }}]">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="quant[{{@ session()->get('id_pro') }}]" class="input-number quant_pro" id="quant_pro{{@ session()->get('id_pro') }}"  data-min="1" data-max="100" value="0" style="text-align: center;font-size:20px" readonly>
                                                <div class="button plus">
                                                    <button type="button" class="btn btn-number plus_btn" id="{{@ session()->get('id_pro') }}" data-type="plus" data-field="quant[{{@ session()->get('id_pro') }}]">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="pro-button" style="color:white;">
                                                @if(auth::check())
                                                <a class="add_order_" id="add_order{{ session()->get('id_pro') }}" nam_tab="{{ session()->get('the_pro') }}" id_pr="{{ session()->get('id_pro') }}">Quantity Request</a>
                                                @else
                                                <a href="{{ route('login') }}" id="add_order{{ session()->get('id_pro') }}" nam_tab="{{ session()->get('the_pro') }}" id_pr="{{ session()->get('id_pro') }}">Quantity Request</a>
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                        @if( DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->quantity != 0 )
                                        <div class="color-quality">
                                            <h4>Quality</h4>
                                            <div class="quantity">
                                                <div class="pro-quantity-changer">
                                                <input type="number" class="quanti" min="1" max="{{ DB::table(session()->get('the_pro'))->find(session()->get('id_pro'))->quantity }}" style="width: 50px" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="single-pro-button">
                                                @if(Auth::check())
                                                    @if(session()->get('the_pro') == 'cars')
                                                        @if(App\cart::where([['pro_car_id',session()->get('id_pro')],['user_id',Auth::user()->id]])->get() != '[]')
                                                            <div class="pro-button" style="background-color:#ffa632ec;color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @else
                                                        <div class="pro-button" style="color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @endif
                                                    @elseif(session()->get('the_pro') == 'clothes')
                                                        @if(App\cart::where([['pro_clothe_id',session()->get('id_pro')],['user_id',Auth::user()->id]])->get() != '[]')
                                                            <div class="pro-button" style="background-color:#ffa632ec;color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @else
                                                        <div class="pro-button" style="color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @endif
                                                    @elseif(session()->get('the_pro') == 'books')
                                                        @if(App\cart::where([['pro_book_id',session()->get('id_pro')],['user_id',Auth::user()->id]])->get() != '[]')
                                                            <div class="pro-button" style="background-color:#ffa632ec;color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @else
                                                        <div class="pro-button" style="color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @endif
                                                    @elseif(session()->get('the_pro') == 'computers')
                                                        @if(App\cart::where([['pro_computer_id',session()->get('id_pro')],['user_id',Auth::user()->id]])->get() != '[]')
                                                            <div class="pro-button" style="background-color:#ffa632ec">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @else
                                                        <div class="pro-button" style="color:white;">
                                                        <a class=" add_cart" id="add_cart{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}">ADD TO Cart</a>
                                                        </div>
                                                        @endif
                                                @endif
                                                @else
                                                <div class="pro-button">
                                                    <a  href="{{ route('login') }}">ADD TO Cart</a>
                                                </div>
                                                @endif
                                            @endif
                                            @if(Auth::check())
                                            @if(session()->get('the_pro') == 'cars')
                                                @if (collect(App\product_love::where([['id_cars',session()->get('id_pro')],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}"><svg width="1.2em" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @else
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}" ><svg width="1.2em" style="margin-top:11px;color:#ffa61fec" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @endif
                                            @endif
                                            @if(session()->get('the_pro') == 'books')
                                                @if (collect(App\product_love::where([['id_books',session()->get('id_pro')],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}"><svg width="1.2em" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @else
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}" ><svg width="1.2em" style="color:#ffa61fec" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @endif
                                            @endif
                                            @if(session()->get('the_pro') == 'clothes')
                                                @if (collect(App\product_love::where([['id_clothes',session()->get('id_pro')],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}"><svg width="1.2em" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @else
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}" ><svg width="1.2em" style="color:#ffa61fec" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @endif
                                            @endif
                                            @if(session()->get('the_pro') == 'computers')
                                                @if (collect(App\product_love::where([['id_computers',session()->get('id_pro')],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}"><svg width="1.2em" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @else
                                                    <div class="pro-viwer">
                                                        <a href="" class="viwr add_pro_best" id="add_bestlist{{ session()->get('id_pro') }}" id_pr="{{ session()->get('id_pro') }}" ><svg width="1.2em" style="color:#ffa61fec" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                        </svg></a>
                                                    </div>
                                                @endif
                                            @endif
                                            @else
                                            <div class="pro-viwer">
                                                <a href="{{ route('login') }}"><svg width="1.2em" style="margin-top:11px" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                </svg></a>
                                            </div>
                                            @endif
                                        </div><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</section>
    @auth
    <div class="cover_notif">
        @foreach(DB::table('notification')->get() as $valu)
        @if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty())
            <div  class="toast re{{ $valu->id }}">
                <div class="toast-header">
                <strong class="me-auto">DreamShop</strong>
                <small style="margin-right: 20px">{{ $valu->date }}</small>
                <button type="button" class="btn-close b_close" i="{{ $valu->id }}"></button>
                </div>
                <div class="toast-body">
                    {{ $valu->content }}
                </div>
            </div>
            <br>
            @endif
        @endforeach
    </div>
    @endauth
<style>
    .edit_d{
        display:none;
        border:0.5px solid gray;
        border-radius: 15px;
        padding:2px;
        width:26.5px;
        font-size: 20px;
        transition:0.5s;
    }
    .delete_d{
        display:none;
        border:0.5px solid gray;
        border-radius: 15px;
        padding:2px;
        width:26.5px;
        font-size: 20px;
        transition:0.5s;
    }
    .tutch_event{
        transition:0.5s;
    }
    .tutch_event:hover .edit_d{
        display:inline-block;
    }
    .tutch_event:hover .delete_d{
        display:inline-block;
    }
    .delete_d:hover{
        color:#ff0000ef;
        border:0.5px solid #ff0000ec;
    }
    .edit_d:hover{
        color:#003cffec;
        border:0.5px solid #003cffec;
    }
</style>
<!--/ End Product Style 1  -->
<div class="cover_form_edit_comment">
    <form class="form_edit_comments" id="form_edit_comments" method="POST">
        @csrf
        <h3>edit your comment</h3>
        <hr>
            <textarea class="comment_after_edit" style="width: 350px;height:60px;margin-left:13%;" id="" cols="300" rows="10" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="enter your new comment"></textarea>
            <input type="submit" class="btn btn-dark com_edit_btn" style="left:30%;top:20%" value="Comment now">
    </form>
</div>
<div class="container bootdey">
<div class="col-md-12 bootstrap snippets">
<div class="panel">
  <div class="panel-body">
    <textarea class="text_comment" style="width:70%;height:50px" placeholder="What are you thinking?"></textarea>
    @if(Auth::check())
    <input type='submit' class='btn-outline-dark button_com' style='padding:5px;background: white;' value="comment">
    @else
    <a href="{{ route('login') }}" class='btn-outline-dark link_btn' style='padding:5px;background: white;padding-top: 10px;'>comment</a>
    @endif
  </div>
</div>
<div class="panel text_body_comment">

{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}


    @if(session()->get('the_pro') == 'cars')
        @foreach(DB::table('comments')->where('id_cars',session()->get('id_pro'))->limit(20)->get() as $key)
            <div class="panel-body coment{{ $key->id }}">
                <div class="media-block">
                <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ DB::table('the_guest')->find($key->id_user)->images ?? 'https://bootdey.com/img/Content/avatar/avatar1.png' }}"></a>
                    <div class="media-body" id="body_com{{ $key->id }}">
                        <div class="mar-btm tutch_event">
                            <a class="btn-link text-semibold media-heading box-inline ">{{@ DB::table('the_guest')->find($key->id_user)->name }} </a>
                            @if(Auth::check())
                            <input type="hidden" class="id_sele" value="">
                                <span style="cursor: pointer" >{!! DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id ? '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg>
                        <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>' : ''!!}</span>
                            @endif
                            <p class="text-sm text-muted">{{@ $key->date }}</p>
                        </div>
                        <p class='comment_is_here{{ $key->id }}'>{{@ $key->text_comment }}</p>
                        <hr>
                    </div>
                </div>
            </div>
        @endforeach
        @elseif(session()->get('the_pro') == 'books')
        @foreach(DB::table('comments')->where('id_books',session()->get('id_pro'))->limit(10)->get()->chunk(15) as $ke)
            @foreach($ke as $key)
        <div class="panel-body coment{{ $key->id }}">
            <div class="media-block">
            <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ DB::table('the_guest')->find($key->id_user)->images ?? 'https://bootdey.com/img/Content/avatar/avatar1.png' }}"></a>
                <div class="media-body" id="body_com{{ $key->id }}">
                    <div class="mar-btm tutch_event">
                        <a class="btn-link text-semibold media-heading box-inline ">{{@ DB::table('the_guest')->find($key->id_user)->name }} </a>
                        @if(Auth::check())
                        <input type="hidden" class="id_sele" value="">
                            <span style="cursor: pointer" >{!! DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id ? '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                    <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>' : ''!!}</span>
                        @endif
                        <p class="text-sm text-muted">{{@ $key->date }}</p>
                    </div>
                    <p class='comment_is_here{{ $key->id }}'>{{@ $key->text_comment }}</p>
                    <hr>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
        @elseif(session()->get('the_pro') == 'clothes')
        @foreach(DB::table('comments')->where('id_clothes',session()->get('id_pro'))->limit(10)->get()->chunk(15) as $ke)
        @foreach($ke as $key)
        <div class="panel-body coment{{ $key->id }}">
            <div class="media-block">
            <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ DB::table('the_guest')->find($key->id_user)->images ?? 'https://bootdey.com/img/Content/avatar/avatar1.png' }}"></a>
                <div class="media-body" id="body_com{{ $key->id }}">
                    <div class="mar-btm tutch_event">
                        <a class="btn-link text-semibold media-heading box-inline ">{{@ DB::table('the_guest')->find($key->id_user)->name }} </a>
                        @if(Auth::check())
                        <input type="hidden" class="id_sele" value="">
                            <span style="cursor: pointer" >{!! DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id ? '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                    <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>' : ''!!}</span>
                        @endif
                        <p class="text-sm text-muted">{{@ $key->date }}</p>
                    </div>
                    <p class='comment_is_here{{ $key->id }}'>{{@ $key->text_comment }}</p>
                    <hr>
                </div>
            </div>
        </div>
            @endforeach
            @endforeach
        @elseif(session()->get('the_pro') == 'computers')
        @foreach(DB::table('comments')->where('id_computer',session()->get('id_pro'))->limit(10)->get()->chunk(15) as $ke)
        @foreach($ke as $key)
        <div class="panel-body coment{{ $key->id }}">
            <div class="media-block">
            <a class="media-left" style="margin-right: 15px" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="{{ DB::table('the_guest')->find($key->id_user)->images ?? 'https://bootdey.com/img/Content/avatar/avatar1.png' }}"></a>
                <div class="media-body" id="body_com{{ $key->id }}">
                    <div class="mar-btm tutch_event">
                        <a class="btn-link text-semibold media-heading box-inline ">{{@ DB::table('the_guest')->find($key->id_user)->name }} </a>
                        @if(Auth::check())
                        <input type="hidden" class="id_sele" value="">
                            <span style="cursor: pointer" >{!! DB::table('the_guest')->find($key->id_user)->id == Auth::user()->id ? '<svg width="1.1em" class="edit_d" id=edit_co'.$key->id.' id_com='.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                    <svg width="1.1em" class="delete_d" id_com='.$key->id.' id=dele_co'.$key->id.' height="1.1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>' : ''!!}</span>
                        @endif
                        <p class="text-sm text-muted">{{@ $key->date }}</p>
                    </div>
                    <p class='comment_is_here{{ $key->id }}'>{{@ $key->text_comment }}</p>
                    <hr>
                </div>
            </div>
        </div>
            @endforeach
            @endforeach
    @endif
</div>
</div>
</div>

<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo2.png" alt="#"></a>
                        </div>
                        <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                        <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>NO. 342 - London Oxford Street.</li>
                                <li>012 United Kingdom.</li>
                                <li>info@eshop.com</li>
                                <li>+032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="images/payments.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->

<!-- Fancybox JS -->
	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
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
	<!-- Popper JS -->
    <script src="js/popper.min.js"></script>

{{-- //////////////////////////////////////  pusher  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
Pusher.logToConsole = true;
      var pusher = new Pusher('7a783e2d8aa18dbc528e', {
        cluster: 'eu'
      });

      $(document).ready(function events(){
        ///////////////////////////////////////// event \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\




        var n=parseInt($('.num_iteam').text());
        if(n == 0){
            $('.num_iteam').hide();
        }

        $('.notifi_be').click(function (){
                $('.list_notifi').fadeToggle();
            });
        $('.preloader').fadeOut();
        var channel = pusher.subscribe('new_comment');
            channel.bind('App\\Events\\see_comment', function(data){
                $.ajax({
                    type: "post",
                    url: "{{ route('check_comments') }}",
                    data: {'_token':'{{ csrf_token() }}','data':data},
                    success: function (response) {
                        $('.text_body_comment').html(response);
                            $('.edit_d').click(function (){
                                $('.cover_form_edit_comment').fadeIn();
                                $('.id_sele').val($(this).attr('id_com'));
                            });
                            $('.com_edit_btn').click(function (event){
                            event.preventDefault();
                            id=$('.id_sele').val();
                            $.ajax({
                                type: "post",
                                url: "{{ route('comment_edit') }}",
                                data: {'_token':'{{ csrf_token() }}','id_pro':id,'comment':$('.comment_after_edit').val() },
                            });
                            });

                            $('.delete_d').click(function (event){
                            id=$(this).attr('id_com');
                            $.ajax({
                                type: "post",
                                url: "{{ route('comment_delete') }}",
                                data: {'_token':'{{ csrf_token() }}','id_pro':id},
                            });
                            });
                        $('.button_com').removeAttr("disabled");
                    }
                });
            });

        var channel = pusher.subscribe('delete_comments');
        channel.bind('App\\Events\\delete_comment', function(data){
            $('.coment'+data.id_pro).remove();
        });
        var channel = pusher.subscribe('edit_comments');
        channel.bind('App\\Events\\edit_comment', function(data){
            $.ajax({
                    type: "post",
                    url: "{{ route('edit_comment') }}",
                    data: {'_token':'{{ csrf_token() }}','id':data.id_pro},
                    success: function (response) {
                        $('.cover_form_edit_comment').fadeOut();
                        $('.comment_is_here'+data.id_pro).html(response);
                    }
                });
        });

/////////////////////////////////////////////////////////////////// event jquery \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
        //minus_btn
        //plus_btn
        //quant_pro
        $('.plus_btn').click(function () {
            $('.minus_btn').removeAttr("disabled");
        });
        $('.minus_btn').click(function () {
            var v=$('.quant_pro').val();
            if(v==0){
            $('.minus_btn').attr("disabled","disabled");
            }
        })


        $('.total-count').text($('.nom').attr('id'));

        $('.add_pro_best').click(function (event){
                event.preventDefault();
            $(this).attr("disabled","disabled");
                id=$(this).attr('id_pr');
                $.ajax({
                    type: "post",
                    url: "{{ route('add_bestlist_pro') }}",
                    data: {'_token':'{{ csrf_token() }}','id_pro':id},
                    success: function (response) {
                        $('#add_bestlist'+id).html(response);
                        $(this).removeAttr("disabled");
                    },error: function (){
                        alert('Error!');
                    }
                });
                });
            $('.button_com').click(function (event) {
                event.preventDefault();
                    $('.button_com').attr("disabled","disabled");
                    $.ajax({
                        type: "post",
                        url: "{{ route('comment_insert') }}",
                        data: {'_token':'{{ csrf_token() }}','name_t':"{{ session()->get('the_pro') }}",'id_pro':"{{ session()->get('id_pro') }}",'comment':$('.text_comment').val() },
                        error:function(){
                        $('.button_com').removeAttr("disabled");
                        alert('your input have error !');
                        }
                    });
            });
                $('.edit_d').click(function (){
                    $('.cover_form_edit_comment').fadeIn();
                    $('.id_sele').val($(this).attr('id_com'));
                });
                $('.com_edit_btn').click(function (event){
                event.preventDefault();
                id=$('.id_sele').val();
                $.ajax({
                    type: "post",
                    url: "{{ route('comment_edit') }}",
                    data: {'_token':'{{ csrf_token() }}','id_pro':id,'comment':$('.comment_after_edit').val() },
                });
                });

                $('.delete_d').click(function (event){
                id=$(this).attr('id_com');
                $.ajax({
                    type: "post",
                    url: "{{ route('comment_delete') }}",
                    data: {'_token':'{{ csrf_token() }}','id_pro':id},
                });
                });
                $('.add_cart').click(function (event){
                event.preventDefault();
                id=$(this).attr('id_pr');
                $.ajax({
                    type: "post",
                    url: "{{ route('add_cart_only') }}",
                    data: {'_token':'{{ csrf_token() }}','id_pro':id,'quantity':$('.quanti').val()},
                    success: function (response) {
                        if(response == 'insert'){
                        $('.pro-button').css("background-color", "#fc9619");
                        }else{
                        $('.pro-button').css("background-color", "#152036");
                        }

                    }
                });
                });
                $('.image_img').click(function (event) {
                    $('.img_one').attr('src',$(this).attr('src'));
                    $('.image_se').click(function(){
                        $('.image_se').removeClass('active');
                        $(this).addClass('active');
                    });
                });
                $('.add_order_').click(function (event) {
                    event.preventDefault();
                    var _id=$(this).attr('id_pr');
                    var _name=$(this).attr('nam_tab');
                $.ajax({
                    type: "post",
                    url: "{{ route('add_order_r') }}",
                    data: {'_token':'{{ csrf_token() }}','value':$('.quant_pro').val(),'namet':_name,'idp':_id},
                    success:function (){
                        alert('your mission is success');
                    },error:function (){
                        alert('you have error');
                    }
                });
                })
    });
</script>{{-- click_show_event --}}{{-- cover_form_edit_comment --}}
</body>
</html>
