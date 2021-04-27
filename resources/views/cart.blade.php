<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>DreamShop
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://js.stripe.com/v3/"></script>
</head>
<body class="js">

		<!-- Header -->
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
													<li><a href="#">Product</a></li>
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">Shop Grid</a></li>
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
													<li><a href="contact.html">Contact Us</a></li>
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
                            <li class="active"><a href="{{ route('DreamShop') }}">Home</a></li>
							<li class="active"><a href="blog-single.html">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
        @if(session()->get('case_pay') != null)
        <div class="alert alert-primary show_Done" role="alert">
            <h4 class="alert-heading">Done !</h4>
            {{ session()->get('case_pay') }}
        </div>
        @endif

		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                            @foreach (DB::table("cars_shopping")->where('user_id',Auth::user()->id ??'')->get() as $va =>$key)
                                                    @if($key->pro_car_id > 0)
                                                    <tr class="_product_cars_{{ $key->id }}">
                                                        <td class="image" data-title="No"><img src="{{ App\cars::find($key->pro_car_id)->images }}" alt="#"></td>
                                                        <td class="product-des" data-title="Description">
                                                            <p class="product-name"><a href="#">{{ App\cars::find($key->pro_car_id)->name }}</a></p>
                                                            <p class="product-des">{{@ App\cars::find($key->pro_car_id)->descriptions }}</p>
                                                        </td>
                                                        <td class="price" data-title="Price">$<span class="Price" id="Price{{ $key->id }}">{{ $key->the_price }}</span></td>
                                                        <td class="qty" data-title="Qty"><!-- Input Order -->
                                                            <div class="input-group">
                                                                <div class="button minus">
                                                                    <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $key->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[{{ $key->id }}]" class="input-number quant_pro" id="quant_pro{{ $key->id }}"  data-min="1" data-max="{{ App\cars::find($key->pro_car_id)->quantity }}" value="{{ $key->number_pro }}">
                                                                <div class="button plus">
                                                                    <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $key->id }}" data-type="plus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--/ End Input Order -->
                                                        </td>
                                                        <td class="total-amount" data-title="Total">$<span id="Total{{ $key->id }}">{{ $key->total_price }}</span></td>
                                                        <td class="action" data-title="Remove"><a href="" class="drop_prod" id="{{ $key->id }}" name="cars"><i class="ti-trash remove-icon"></i></a></td>
                                                    </tr>
                                                    @elseif($key->pro_clothe_id > 0)
                                                    <tr class="_product_clothes_{{ $key->id }}">
                                                        <td class="image" data-title="No"><img src="{{ App\clothes::find($key->pro_clothe_id)->images }}" alt="#"></td>
                                                        <td class="product-des" data-title="Description">
                                                            <p class="product-name"><a href="#">{{ App\clothes::find($key->pro_clothe_id)->name }}</a></p>
                                                            <p class="product-des">{{@ App\clothes::find($key->pro_clothe_id)->descriptions }}</p>
                                                        </td>
                                                        <td class="price" data-title="Price">$<span class="Price" id="Price{{ $key->id }}">{{ $key->the_price }}</span></td>
                                                        <td class="qty" data-title="Qty"><!-- Input Order -->
                                                            <div class="input-group">
                                                                <div class="button minus">
                                                                    <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $key->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[{{ $key->id }}]" class="input-number quant_pro" id="quant_pro{{ $key->id }}"  data-min="1" data-max="{{ App\clothes::find($key->pro_clothe_id)->quantity }}" value="{{ $key->number_pro }}" readonly>
                                                                <div class="button plus">
                                                                    <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $key->id }}" data-type="plus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--/ End Input Order -->
                                                        </td>
                                                        <td class="total-amount" data-title="Total">$<span class="Total" id="Total{{ $key->id }}">{{ $key->total_price }}</span></td>
                                                        <td><a href="" class="drop_prod" id="{{ $key->id }}" name="clothes"><i class="ti-trash remove-icon"></i></a></td>
                                                    </tr>
                                                    @elseif($key->pro_book_id > 0)
                                                    <tr class="_product_books_{{ $key->id }}">
                                                        <td class="image" data-title="No"><img src="{{ App\books::find($key->pro_book_id)->images }}" alt="#"></td>
                                                        <td class="product-des" data-title="Description">
                                                            <p class="product-name"><a href="#">{{ App\books::find($key->pro_book_id)->name }}</a></p>
                                                            <p class="product-des">{{@ App\books::find($key->pro_book_id)->descriptions }}</p>
                                                        </td>
                                                        <td class="price" data-title="Price">$<span class="Price" id="Price{{ $key->id }}">{{ $key->the_price }}</span></td>
                                                        <td class="qty" data-title="Qty"><!-- Input Order -->
                                                            <div class="input-group">
                                                                <div class="button minus">
                                                                    <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $key->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[{{ $key->id }}]" class="input-number quant_pro" id="quant_pro{{ $key->id }}"  data-min="1" data-max="{{ App\books::find($key->pro_book_id)->quantity }}" value="{{ $key->number_pro }}">
                                                                <div class="button plus">
                                                                    <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $key->id }}" data-type="plus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--/ End Input Order -->
                                                        </td>
                                                        <td class="total-amount" data-title="Total">$<span class="Total" id="Total{{ $key->id }}">{{ $key->total_price }}</span></td>
                                                        <td class="action" data-title="Remove"><a href="" class="drop_prod" id="{{ $key->id }}" name="books"><i class="ti-trash remove-icon"></i></a></td>
                                                    </tr>
                                                    @elseif($key->pro_computer_id > 0)
                                                    <tr class="_product_computers_{{ $key->id }}">
                                                        <td class="image" data-title="No"><img src="{{ App\computers::find($key->pro_computer_id)->images }}" alt="#"></td>
                                                        <td class="product-des" data-title="Description">
                                                            <p class="product-name"><a href="#">{{ App\computers::find($key->pro_computer_id)->name }}</a></p>
                                                            <p class="product-des">{{@ App\computers::find($key->pro_computer_id)->descriptions }}</p>
                                                        </td>
                                                        <td class="price" data-title="Price">$<span class="Price" id="Price{{ $key->id }}">{{ $key->the_price }}</span></td>
                                                        <td class="qty" data-title="Qty"><!-- Input Order -->
                                                            <div class="input-group">
                                                                <div class="button minus">
                                                                    <button type="button" class="btn btn-primary btn-number minus_btn" id="{{ $key->id }}" disabled="disabled" data-type="minus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[{{ $key->id }}]" class="input-number quant_pro" id="quant_pro{{ $key->id }}"  data-min="1" data-max="{{ App\computers::find($key->pro_computer_id)->quantity }}" value="{{ $key->number_pro }}">
                                                                <div class="button plus">
                                                                    <button type="button" class="btn btn-primary btn-number plus_btn" id="{{ $key->id }}" data-type="plus" data-field="quant[{{ $key->id }}]">
                                                                        <i class="ti-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--/ End Input Order -->
                                                        </td>
                                                        <td class="total-amount" data-title="Total">$<span class="Total" id="Total{{ $key->id }}">{{ $key->total_price }}</span></td>
                                                        <td class="action" data-title="Remove"><a href="" class="drop_prod" id="{{ $key->id }}" name="computers"><i class="ti-trash remove-icon"></i></a></td>
                                                    </tr>
                                                    @endif
                                                @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
                    <!-- Total Amount -->

                    <style>
                        .StripeElement {
                        box-sizing: border-box;

                        height: 40px;

                        padding: 10px 12px;

                        border: 1px solid transparent;
                        border-radius: 4px;
                        background-color: white;

                        box-shadow: 0 1px 3px 0 #e6ebf1;
                        -webkit-transition: box-shadow 150ms ease;
                        transition: box-shadow 150ms ease;
                        }

                        .StripeElement--focus {
                        box-shadow: 0 1px 3px 0 #cfd7df;
                        }

                        .StripeElement--invalid {
                        border-color: #fa755a;
                        }

                        .StripeElement--webkit-autofill {
                        background-color: #fefde5 !important;}
                        #card-element{
                            width:100%;
                        }
                </style>

                    <form action="{{ route('payments') }}" method="post" id="payment-form">
                        @csrf
                        <input type="hidden" value="{{ $tot=collect(DB::table("cars_shopping")->where('user_id',Auth::user()->id??'')->get('total_price'))->sum('total_price') }}">
                        @if(Auth::check())
                        @if(collect(DB::table("cars_shopping")->where('user_id',Auth::user()->id??'')->get())->isEmpty())
                        <div class="total-amount">
                            <div class="row">
                                <div class="col-lg-6" style="margin-left: 50%">
                                    <div class="center" style="margin-left: -20%">
                                        <div class="button5">
                                            <h2>no thing</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <br>
                        <button type="button" id_total="" class="btn btn-primary plus_amount" style="padding:20px;width:250px;border-radius: 25px;display:none">Collect the amount <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute;right:3%;top:16%;display:inline-block;" width="2.5em" height="2.5em" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5h2.025zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5zM1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                          </svg></button>
                        <div class="total-amount">
                            <div class="row">
                                <div class="col-lg-6" style="margin-left: 50%">
                                    <div class="right">
                                        <ul>
                                            <li>Total amount owed: <span>$<span class="price_t">{{ $tot }}</span></span></li>
                                            <hr>
                                            <input type="hidden" name="price" value="{{ $tot }}">
                                        <div class="form-row">
                                            <label for="card-element">
                                                Enter your card :
                                                <br>
                                            </label>
                                            <div id="card-element">

                                            </div>
                                        </ul>
                                        <div class="button5">
                                            <button class="btn">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="total-amount">
                            <div class="row">
                                <div class="col-lg-6" style="margin-left: 50%">
                                    <div class="center" style="margin-left: -20%">
                                        <div class="button5">
                                            <h2>no thing</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </form>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->

	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->



	<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal4.jpg" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

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
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
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
    <script>//parseInt(d)
        $(document).ready(function () {
            $('.drop_prod').click(function(e){
                e.preventDefault();
                var id=$(this).attr('id');
                var name=$(this).attr('name');
                $.ajax({
                    type: "POST",
                    url: "{{ route('delete_prp_cart') }}",
                    data: {'_token':'{{ csrf_token() }}','id':id,'name':name},
                    success:function (data){
                        if(name == 'cars'){
                            $('._product_cars_'+id).remove();
                        }
                        if(name == 'computers'){
                            $('._product_computers_'+id).remove();
                        }
                        if(name == 'clothes'){
                            $('._product_clothes_'+id).remove();
                        }
                        if(name == 'books'){
                            $('._product_books_'+id).remove();
                        }
            $('.plus_amount').fadeIn(500);
                    }
                });
            });
            $('.plus_btn').on('click',function(){
                var id=$(this).attr('id');
            var price=parseInt($('#Price'+id).text());
            var quant=parseInt($('#quant_pro'+id).val());
            var total=price*quant;
            $('#Total'+id).text(total);
            $.ajax({
                    type: "POST",
                    url: "{{ route('plus_amount_cart') }}",
                    data: {'_token':'{{ csrf_token() }}','id':id,'quant':quant,'total':total},
            });
            $('.plus_amount').fadeIn(500);
            $('.plus_amount').attr('id_total',id);
            });


            $('.minus_btn').on('click',function(){
                var id=$(this).attr('id');
            var price=parseInt($('#Price'+id).text());
            var quant=parseInt($('#quant_pro'+id).val());
            var total=price*quant;
            $('#Total'+id).text(total);
            $.ajax({
                    type: "POST",
                    url: "{{ route('minus_amount_cart') }}",
                    data: {'_token':'{{ csrf_token() }}','id':id,'quant':quant,'total':total},
            });
            $('.plus_amount').fadeIn(500);
            $('.plus_amount').attr('id_total',id);
            });

            $('.show_Done').delay(2500).fadeOut();

            $('.plus_amount').click(function (e) {
                e.preventDefault();
            $.ajax({
                    type: "POST",
                    url: "{{ route('all_amount_cart') }}",
                    data: {'_token':'{{ csrf_token() }}'},
                    success:function(total){
                        $('.price_t').text(total);
                        $('.plus_amount').fadeOut();
                    }
            });
            });

        });
    </script>

    <script>
        var stripe = Stripe('pk_test_51HOo0aCJaDmfoDGy9UMqlAQzLo3dmQx3qtHcJgm30miW3CdjNTVlZnsNoSowsUiJ9CRXfyMPjTK7ZsO2UP1JumGh00Nw5fuomZ');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
          base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
              color: '#aab7c4'
            }
          },
          invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
          }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
          var displayError = document.getElementById('card-errors');
          if (event.error) {
            displayError.textContent = event.error.message;
          } else {
            displayError.textContent = '';
          }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
          event.preventDefault();

          stripe.createToken(card).then(function(result) {
            if (result.error) {
              // Inform the user if there was an error.
              var errorElement = document.getElementById('card-errors');
              errorElement.textContent = result.error.message;
            } else {
              // Send the token to your server.
              stripeTokenHandler(result.token);
            }
          });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
          // Insert the token ID into the form so it gets submitted to the server
          var form = document.getElementById('payment-form');
          var hiddenInput = document.createElement('input');
          hiddenInput.setAttribute('type', 'hidden');
          hiddenInput.setAttribute('name', 'stripeToken');
          hiddenInput.setAttribute('class', 'stripeToken');
          hiddenInput.setAttribute('value', token.id);
          form.appendChild(hiddenInput);

          // Submit the form
          form.submit();
        }
                </script>
</body>
</html>
