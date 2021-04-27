<style>
    .logo_pa{
        position: absolute;
        left: 10%;
        top: -15%;
        height: 1in;
    }
</style>
<style>
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
                                @if(!Auth::guard('web')->check()&&!Auth::guard('admin')->check())
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
							<a href="#"><img src="{{ asset('images\logo_2.jpg')}}" class="logo_pa" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form method="POST">
                                    @csrf
									<input type="search" class="" placeholder="Search here..." name="search">
                                    <button class="but_search" value="search" type="submit"><i class="ti-search"></i></button>
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
							<div class="sinlge-bar">
                                @auth('admin')
                                    <a href="{{ route('dashboard') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                @endauth
                                @auth('web')
                                    <a href="{{ route('profile') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"> </i><br/><p style="position: absolute;left: -12.5px;">{{ Auth::user()->name }}</p></a>
                                @endauth{{--
                                --}}
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

							<div class="sinlge-bar">
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
        <br>
<!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div>
                                <div class="all-category">
<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
<ul class="main-category">
 @foreach($data_show ?? '' as $key)
     <li class="main-mega"><a class="butt" href="{{ route('Grid') }}" content_t="{{ $key->sections }}">{{ $key->sections }}<i class="fa fa-angle-right" aria-hidden="true"></i></a>
         <ul class="mega-menu">
             <div class="scroll_handel">
                 @foreach ($key->find($key->id)->data_show as $ky)
                     <li class="single-menu">
                         <a href="#" class="title-link">{{ $ky->name }}</a>
                     <div class="image">
                         <img src="{{ asset($ky->image_sections) }}" style="width: 100%;height:155px" width="225px" height="155px" alt="#">
                     </div>
                         <div class="inner-link">
                             @foreach(DB::table($key->sections)->where('type_id',$ky->id)->take(2)->get('name') as $k)
                             <a href="#">{{ $k->name }}</a>
                             @endforeach
                         </div>
                         <br><br>
                     </li>
                 @endforeach
             </div>
         </ul>
     </li>

 @endforeach
</ul>
</div>
</div>

</div>
<div class="col-lg-9 col-12">
<div class="menu-area">
<!-- Main Menu -->
<nav class="navbar navbar-expand-lg">
<div class="navbar-collapse">
 <div class="nav-inner">
     <ul class="nav main-menu menu navbar-nav">
             <li class="active"><a href="#">Home</a></li>
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
