<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>DreamShop</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <style>
        .num_iteam{
    display: inline-block;
    background-color: rgba(255, 28, 28, 0.932);
    color:white;
    border-radius: 200px;
    position: absolute;
    right: -5px;
    top:-20px;
    font-size: 12.5px;
    height:20px;
    padding-bottom:2px;
    padding-left:2px;
    padding-right:2px;
    z-index:10000;
        }
    .num_iteam{
display: inline-block;
background-color: rgba(255, 28, 28, 0.932);
color:white;
border-radius: 200px;
position: absolute;
right: -5px;
top:-5px;
font-size: 12.5px;
height:20px;
padding-bottom:2px;
padding-left:2px;
padding-right:2px;
z-index:10000;
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
    color:rgb(63, 0, 134);
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
        right:0%;
        top:4%;
        display:inline-block;
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
<body class="js">

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
                                    <form method="POST" class="form_0" style="width:100%">
                                        @csrf
                                        <input name="search" class="search_live" placeholder="Search Products Here....." style="width:100%;position: relative;padding-right:12.5%;" type="search">
                                        <a href="{{ route('Grid') }}" class="btnn"><i class="ti-search"></i></a>
                                        <ul class="list-group list show_hidden" style="width:100%;position: relative;left:0;">
                                        </ul>
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
                                            <span class="num_iteam">{{ collect(DB::select("SELECT * FROM `cars_shopping` WHERE `user_id`=".Auth::user()->id))->count() }}</span>
                                        @endauth
                                        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                                                                <small class="small{{$valu->id}}" style="margin-left:30%">{{ $valu->date }}</small>
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
                                                    <li ><a href="{{ route('DreamShop') }}">Home</a></li>
													<li><a href="#">Product</a></li>
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a class="active">Shop Grid</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li>
                                                    <li ><a href="{{ route('box_complaints') }}">Contact Us</a></li>
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

		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categories</h3>
									<ul class="categor-list">
                                        @foreach(App\detels_sections::get()->random(10) as $key)
                                            <li><a href="#"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                                    </svg> {{ $key->name }}</a></li>
                                        @endforeach
									</ul>
								</div>
								<!--/ End Single Widget -->
								<!-- Shop By Price -->
                                @if(session()->get('case_search') == '0')
									<div class="single-widget range">
										<h3 class="title">Shop by Price</h3>
										<div class="price-filter">
											<div class="price-filter-inner">
                                                <input type="range" class="form-range p_range" min="{{ DB::table(session()->get('nm_s'))->get('price')->MIN('price') }}" max="{{ DB::table(session()->get('nm_s'))->get('price')->MAX('price') }}" step="1" value="0" id="customRange3" style="width:130%;margin-left:-30px;padding:0px;">
													<div class="price_slider_amount">
													<div class="label-input">
														<span>Range:</span><input type="text" class="pr_text" name="price" placeholder="Price" value="{{ DB::table(session()->get('nm_s'))->get('price')->MIN('price') }}" readonly/>
													</div>
												</div>
											</div>
										</div>
										<ul class="check-box-list">
											<button type="submit" class="btn btn-primary search_price">search</button>
										</ul>
									</div>
                                    @endif
									<!--/ End Shop By Price -->
								<!-- Single Widget -->
								<div class="single-widget recent-post">
									<h3 class="title">Recent post</h3>
									<!-- Single Post -->
                                    @foreach($data_show->random(3) as $key)
                                        @foreach(DB::table($key->sections)->get()->random(1) as $ke)
                                            <div class="single-post first">
                                                <div class="image">
                                                    <img src="{{ asset($ke->images) }}" alt="#">
                                                </div>
                                                <div class="content">
                                                    <h5><a class="go_g" href="{{ route('show_product') }}" name_t="{{ $key->sections }}" pro_id="{{ $ke->id }}" id="{{ $ke->id }}">{{ $ke->name }}</a></h5>
                                                    <p class="price">${{ $ke->price }}</p>
                                                    <ul class="reviews">
                                                        <li style="color: yellow">@switch ($ke->number_evaluation)
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
                                                            </a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
									<!-- End Single Post -->
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Manufacturers</h3>
									<ul class="categor-list">
										<li><a href="#">Forever</a></li>
										<li><a href="#">giordano</a></li>
										<li><a href="#">abercrombie</a></li>
										<li><a href="#">ecko united</a></li>
										<li><a href="#">zara</a></li>
									</ul>
								</div>
								<!--/ End Single Widget -->
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
                                    <style>
                                        .list{
                                            height: auto;
                                            min-height: 10px;
                                            max-height: 200px;
                                            width: 150px;

                                        }
                                    </style>
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Sort By :</label>
											<select class="select_by">
												<option selected="selected">Any</option>
                                                <option>name</option>
                                                <option>price</option>
                                                <option>date</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
                                        @if(session()->get('case_search') == '0')
                                        @if(session()->get('nm_s') == 'cars')
                                        <li class="active" style="font-size:20px;color:#fda02e;"> Show carriages </li>
                                        @elseif(session()->get('nm_s') == 'books')
                                        <li class="active" style="font-size:20px;color:#fda02e;"> Show books </li>
                                        @elseif(session()->get('nm_s') == 'clothes')
                                        <li class="active" style="font-size:20px;color:#fda02e;"> Show clothes</li>
                                        @elseif(session()->get('nm_s') == 'computers')
                                        <li class="active" style="font-size:20px;color:#fda02e;"> Show computers </li>
                                        @endif
                                        @else
                                        <li class="active" style="font-size:20px;color:#fda02e;"> some of product </li>
                                        @endif
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="row group_tets">
                            @if(session()->get('case_search') == '0')
                            @foreach(  DB::table(session()->get('nm_s'))->get()->chunk(50) as $ke)
                                @foreach($ke as $key)
                                        @if(Auth::guard('web')->check()||Auth::guard('admin')->check())
                                    <div class="col-lg-4 col-md-6 col-12 best_list {{ session()->get('nm_s').$key->id }}" id="{{ $key->id }}">
                                        @else
                                    <div class="col-lg-4 col-md-6 col-12  {{ session()->get('nm_s').$key->id }}">
                                        @endif
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a class="click_show_event" href="{{ route('show_product') }}" id="{{ $key->id }}">
                                                    <img class="default-img img_{{ session()->get('nm_s').$key->id }}" src="{{ asset($key->images) }}" alt="#">
                                                    @if($key->Discount > 1)
                                                        <span class="price-dec">off%{{ $key->Discount }}</span>
                                                    @endif
                                                </a>
                                                <div class="button-head best_list" id="{{ $key->id }}" style="height: auto">

                                                    @if(Auth::check())
                                                        @if(session()->get('nm_s') == 'cars')
                                                            @if (collect(App\product_love::where([['id_cars',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>
                                                            @else
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>
                                                            @endif
                                                        @elseif(session()->get('nm_s') == 'books')
                                                            @if (collect(App\product_love::where([['id_books',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>
                                                            @else
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>
                                                            @endif
                                                        @elseif(session()->get('nm_s') == 'computers')
                                                            @if (collect(App\product_love::where([['id_computers',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>
                                                            @else
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>
                                                            @endif
                                                            @elseif(session()->get('nm_s') == 'clothes')
                                                            @if (collect(App\product_love::where([['id_clothes',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                    </svg>
                                                                <span>you like this ?</span></a>
                                                            </div>
                                                            @else
                                                            <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                <a title="Wishlist" class="btn_love_pro" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl{{@ $key->id }}">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                    </svg>
                                                                <span>i like this</span></a>
                                                            </div>
                                                            @endif
                                                        @endif
                                                    @else
                                                    <div class="product-action">
                                                        <a title="Wishlist" href="{{ route('login') }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                        </svg><span>Add to bestlist</span></a>
                                                    </div>
                                                    @endif
                                                    <div class="product-action-2 body_add_cart">
                                                        @if (Auth::check())

                                                        @if(session()->get('nm_s') == 'cars')
                                                            @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_car_id',$key->id]])->get() == '[]')
                                                            <a title="Add to cart" class="btn_cart" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c_{{@ $key->id }}">Add to cart</a>
                                                            @else
                                                            <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c_{{@ $key->id }}">Add to cart</a>
                                                            @endif
                                                        @elseif(session()->get('nm_s') == 'books')
                                                            @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_book_id',$key->id]])->get() == '[]')
                                                            <a title="Add to cart" class="btn_cart" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo_{{@ $key->id }}">Add to cart</a>
                                                            @else
                                                            <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo_{{@ $key->id }}">Add to cart</a>
                                                            @endif
                                                        @elseif(session()->get('nm_s') == 'clothes')
                                                                @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_clothe_id',$key->id]])->get() == '[]')
                                                                <a title="Add to cart" class="btn_cart" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl_{{@ $key->id }}">Add to cart</a>
                                                                @else
                                                                <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl_{{@ $key->id }}">Add to cart</a>
                                                                @endif
                                                        @elseif(session()->get('nm_s') == 'computers')
                                                                @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_computer_id',$key->id]])->get() == '[]')
                                                                <a title="Add to cart" class="btn_cart" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com_{{@ $key->id }}">Add to cart</a>
                                                                @else
                                                                <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com_{{@ $key->id }}">Add to cart</a>
                                                                @endif
                                                        @endif

                                                            @else
                                                            <a title="Add to cart" href="{{ route('login') }}">Add to cart</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a class="click_show_event name_{{ session()->get('nm_s').$key->id }}" href="{{ route('show_product') }}" id="{{ $key->id }}">{{ $key->name }}</a></h3>
                                                <div class="product-price">
                                                    <span>$<span class="price_{{ session()->get('nm_s').$key->id }}">{{ $key->price }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            @else
                            @foreach(DB::table('show_sections')->get() as $ky)
                                @foreach(DB::table($ky->sections)->where('name','like',session()->get('content_search')."%")->get()->chunk(50) as $ke)
                                    @foreach($ke as $key)
                                            @if(Auth::guard('web')->check()||Auth::guard('admin')->check())
                                        <div class="col-lg-4 col-md-6 col-12 best_list {{ session()->get('nm_s').$key->id }}" id="{{ $key->id }}">
                                            @else
                                        <div class="col-lg-4 col-md-6 col-12  {{ session()->get('nm_s').$key->id }}">
                                            @endif
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a class="go_g" href="{{ route('show_product') }}" name_t="{{ $ky->sections }}" pro_id="{{ $key->id }}" id="{{ $key->id }}">
                                                        <img class="default-img img_{{ session()->get('nm_s').$key->id }}"  src="{{ asset($key->images) }}" alt="#">
                                                        @if($key->Discount > 1)
                                                            <span class="price-dec">off%{{ $key->Discount }}</span>
                                                        @endif
                                                    </a>
                                                    <div class="button-head best_list" id="{{ $key->id }}" style="height: auto">

                                                        @if(Auth::check())
                                                            @if(session()->get('nm_s') == 'cars')
                                                                @if (collect(App\product_love::where([['id_cars',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                        </svg>
                                                                    <span>you like this ?</span></a>
                                                                </div>
                                                                @else
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                        </svg>
                                                                    <span>i like this</span></a>
                                                                </div>
                                                                @endif
                                                            @elseif($ky->sections == 'books')
                                                                @if (collect(App\product_love::where([['id_books',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                        </svg>
                                                                    <span>you like this ?</span></a>
                                                                </div>
                                                                @else
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                        </svg>
                                                                    <span>i like this</span></a>
                                                                </div>
                                                                @endif
                                                            @elseif($ky->sections == 'computers')
                                                                @if (collect(App\product_love::where([['id_computers',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                        </svg>
                                                                    <span>you like this ?</span></a>
                                                                </div>
                                                                @else
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                        </svg>
                                                                    <span>i like this</span></a>
                                                                </div>
                                                                @endif
                                                                @elseif($ky->sections == 'clothes')
                                                                @if (collect(App\product_love::where([['id_clothes',$key->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                                        </svg>
                                                                    <span>you like this ?</span></a>
                                                                </div>
                                                                @else
                                                                <div class="product-action show_best_list def_co{{@ $key->id }}">
                                                                    <a title="Wishlist" class="btn_love_pro" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl{{@ $key->id }}">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="color:#f6931d" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                                        </svg>
                                                                    <span>i like this</span></a>
                                                                </div>
                                                                @endif
                                                            @endif
                                                        @else
                                                        <div class="product-action">
                                                            <a title="Wishlist" href="{{ route('login') }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                            </svg><span>Add to bestlist</span></a>
                                                        </div>
                                                        @endif
                                                        <div class="product-action-2 body_add_cart">
                                                            @if (Auth::check())

                                                            @if($ky->sections == 'cars')
                                                                @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_car_id',$key->id]])->get() == '[]')
                                                                <a title="Add to cart" class="btn_cart" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c_{{@ $key->id }}">Add to cart</a>
                                                                @else
                                                                <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='cars' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="c_{{@ $key->id }}">Add to cart</a>
                                                                @endif
                                                            @elseif($ky->sections == 'books')
                                                                @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_book_id',$key->id]])->get() == '[]')
                                                                <a title="Add to cart" class="btn_cart" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo_{{@ $key->id }}">Add to cart</a>
                                                                @else
                                                                <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='books' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="bo_{{@ $key->id }}">Add to cart</a>
                                                                @endif
                                                            @elseif($ky->sections == 'clothes')
                                                                    @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_clothe_id',$key->id]])->get() == '[]')
                                                                    <a title="Add to cart" class="btn_cart" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl_{{@ $key->id }}">Add to cart</a>
                                                                    @else
                                                                    <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='clothes' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="cl_{{@ $key->id }}">Add to cart</a>
                                                                    @endif
                                                            @elseif($ky->sections == 'computers')
                                                                    @if (DB::table('cars_shopping')->where([['user_id',Auth::user()->id],['pro_computer_id',$key->id]])->get() == '[]')
                                                                    <a title="Add to cart" class="btn_cart" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com_{{@ $key->id }}">Add to cart</a>
                                                                    @else
                                                                    <a title="Add to cart" style="color:#f6931d" class="btn_cart" n_t='computers' id_p="{{ $key->id }}" id_show="{{@ $key->id }}" id="com_{{@ $key->id }}">Add to cart</a>
                                                                    @endif
                                                            @endif

                                                                @else
                                                                <a title="Add to cart" href="{{ route('login') }}">Add to cart</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a class="name_{{ $ky->sections.$key->id }} go_g" href="{{ route('show_product') }}" name_t="{{ $ky->sections }}" pro_id="{{ $key->id }}" id="{{ $key->id }}">{{ $key->name }}</a></h3>
                                                    <div class="product-price">
                                                        <span>$<span class="price_{{ $ky->sections.$key->id }}">{{ $key->price }}</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endforeach
                            @endif

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->
		<!-- Modal -->
        @auth
            <div class="cover_notif">
                @foreach(DB::table('notification')->get() as $valu)
                @if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                    <div  class="toast re{{ $valu->id }}">
                        <div class="toast-header">
                        <strong class="me-auto">DreamShop</strong>
                        <small style="margin-right: 30px">{{ $valu->date }}</small>
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

		<!-- /////////////////////////////////////////////////////////  this footer end site (dark)  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
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
									<img src="images/payments.png" alt="#">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /End Footer Area -->

    <!-- ////////////////////////////////   connect the links for script   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/jquery-ui.min.js"></script>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    //////////////////////////////// connected with pusher \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
            Pusher.logToConsole = true;
                    var pusher = new Pusher('7a783e2d8aa18dbc528e', {
                      cluster: 'eu'
                    });

    //////////////////////////////// start events for pusher \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

                    var channel = pusher.subscribe('remove_prod');
                    channel.bind('App\\Events\\remove_pro', function(data){
                        $('.'+data.name_t+data.id_pro).remove();
                    });

                    var channel = pusher.subscribe('update_prod');
                    channel.bind('App\\Events\\update_pro', function(data){
                        $('.img_'+data.name_t+data.id_pro).attr('src',data.images_pro);
                        $('.name_'+data.name_t+data.id_pro).html(data.name_pro);
                        $('.price_'+data.name_t+data.id_pro).html(data.price_pro);
                    });




    //////////////////////////////////// start code jquery \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    $(document).ready(function hop(){

        var n=parseInt($('.num_iteam').text());
        if(n == 0){
            $('.num_iteam').hide();
        }

        $('.notifi_be').click(function (){
                $('.list_notifi').fadeToggle();
            });

        $('.preloader').fadeOut();

        $('.search_live').keyup(function(){
                $('.show_hidden').show();
                $.ajax({
                    type: "POST",
                    url: "{{ route('search') }}",
                    data: {'_token':'{{ csrf_token() }}','con':$(this).val()},
                    success: function (response) {
                        $('.show_hidden').html(response);
                        hop();
                    }
                });
            });
            $('.btnn').click(function (){
                $.ajax({
                    type: "post",
                    url: "{{ route('seach_event') }}",
                    data: {'_token':'{{ csrf_token() }}','con':$('.search_live').val()}
                });
            });
            $('.go_g').click(function(event){
                var name=$(this).attr('name_t');
                var id=$(this).attr('pro_id');
                $.ajax({
                    type: "post",
                    url: "{{ route('go_to_grid') }}",
                    data: {'_token':'{{ csrf_token() }}','name_t':name,'pro_id':id}
                });
            });

        $('.total-count').text($('.nom').attr('id'));
        $('.select_by').on('change',function (){
            $.ajax({
                type: "post",
                url: "{{ route('select_by') }}",
                data: {'_token':'{{ csrf_token() }}','num':$(this).val()},
                success: function (response) {
                    $('.group_tets').html(response);
                    hop();
                },
                error: function (response) {
                    alert('error');
                }
            });
        });
        $('.p_range').mousemove(function () {
            $('.pr_text').val($(this).val());
        });
        $('.search_price').click(function (event) {
                event.preventDefault();
            $.ajax({
                type: "post",
                url: "{{ route('select_by_price') }}",
                data: {'_token':'{{ csrf_token() }}','price':$('.pr_text').val()},
                success: function (response) {
                    $('.group_tets').html(response);
                    hop();
                },
                error: function (response) {
                    alert('error');
                }
            });
        });
        $('.click_show_event').on('click',function (){
            $.ajax({
                type: "post",
                url: "{{ route('click_show_event') }}",
                data: {'_token':'{{ csrf_token() }}','num':"{{ session()->get('nm_s') }}",'id_mun':$(this).attr('id') },
                success: function (response) {
                    hop();
                },
                error: function (response) {
                    alert('error');
                }
            });
        });
        $('.btn_love_pro').on('click',function (){
             var name_t=$(this).attr('n_t');
             var id_pro=$(this).attr('id_p');
             var id_show=$(this).attr('id_show');
            $.ajax({
                type: "post",
                url: "{{ route('btn_love_pro') }}",
                    data: {'_token':'{{ csrf_token() }}','name_t':name_t,'id_pro':id_pro},
                success: function (response) {
                        if(name_t == 'cars'){
                            $('#c'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                        if(name_t == 'clothes'){
                            $('#cl'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                        if(name_t == 'computers'){
                            $('#com'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                        if(name_t == 'books'){
                            $('#bo'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                },
            });
        });
        $('.btn_cart').on('click',function (){
             var name_t=$(this).attr('n_t');//get the name table
             var id_pro=$(this).attr('id_p');//get the id for product
             var id_show=$(this).attr('id_show');
            $.ajax({
                type: "post",
                url: "{{ route('btn_cart') }}",
                    data: {'_token':'{{ csrf_token() }}','name_t':name_t,'id_pro':id_pro},
                success: function (response) {
                    //chang the button add cart
                        if(name_t == 'cars'){
                            $('#c_'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                        if(name_t == 'clothes'){
                            $('#cl_'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                        if(name_t == 'computers'){
                            $('#com_'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                        if(name_t == 'books'){
                            $('#bo_'+id_pro).html(response.body);
                            $('.num_iteam').html(response.num_itms);
                        }
                },
            });
        });

    });
</script>{{-- click_show_event btn_love_pro --}}
</body>
</html>
