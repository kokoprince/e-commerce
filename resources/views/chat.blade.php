<!DOCTYPE html>
<html>
<head><title>DreamShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="new_handel.css">
    <link rel="stylesheet" href="finsh_style.css">
    <style>
        .number_ms_se{
            width:30px;
            color:white;
            border-radius:50px;
            background-color: rgba(255, 44, 44, 0.911);
            padding:2px;
            position: relative;
            right:-150px;
            top:-30px;
            text-align: center;
        }
.n_sender_ms{
    display: inline-block;
    background-color: rgba(255, 28, 28, 0.932);
    color:white;
    border-radius: 100px;
    position: absolute;
    right: -5px;
    top:-5px;
    padding: 1px;
    z-index:10000;
}
    </style>
</head>
<body class="js">
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
                                <a title="go to cart" href="{{ route('cart') }}" class="single-icon"><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg></a>
                                <!--/ End Shopping Item -->
                            </div>
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
                                                <li><a href="{{ route('DreamShop') }}">Home</a></li>
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
                                                <li class="active"><a href="{{ route('box_complaints') }}">Contact Us</a></li>
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
            <div id='mainContent' class='box_chating'>
                <div class="full-container">
                    <div class="peers fxw-nw pos-r">
                        <!-- Chat Box -->
                        <div class="peer peer-greed" id='chat-box'>
                            <div class="layers h-100">
                                <div class="layer w-100">
                                    <!-- Header -->
                                    <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
                                        <div class="peers ai-c">
                                            <div class="peer d-n@md+">
                                                <a href="" title="" id='chat-sidebar-toggle' class="td-n c-grey-900 cH-blue-500 mR-30">
                                                    <i class="ti-menu"></i>
                                                </a>
                                            </div>
                                            <div class="peer mR-20">
                                                <img src="{{ asset('images\logo_2.jpg')}}" alt="" class="w-3r h-3r bdrs-50p img_u">
                                            </div>
                                            <div class="peer">
                                                <h6 class="lh-1 mB-0 name_u">DreamShop</h6>
                                                <i class="fsz-sm lh-1">online</i>
                                            </div>
                                        </div>
                                        @auth('admin')

                                        <div class="peers ai-c">
                                                  <div class="btn-group">
                                                      <span class="n_sender_ms">
                                                          {{ collect(DB::select("SELECT DISTINCT `box_complaints`.`id_user` FROM `box_complaints` WHERE `id_admin` IS NULL ORDER BY `box_complaints`.`id_user` ASC"))->count() }}
                                                      </span>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        the messages
                                                    </button>
                                                    <ul class="dropdown-menu users_open" us="{{ $user='' }}" style="width: 210px;max-height: 300px;overflow-y: scroll">
                                                        @foreach(DB::select("SELECT DISTINCT box_complaints.id_user FROM `box_complaints` WHERE `box_complaints`.`id_admin` IS null") as $key)
                                                        <li><a class="dropdown-item select_user" href="" id="use{{ $key->id_user }}" id_u="{{ $key->id_user }}"><img class="w-2r bdrs-50p" src="{{@ DB::table('the_guest')->find($key->id_user)->images }}" alt=""> {{@ DB::table('the_guest')->find($key->id_user)->name }}</a> <span class="number_ms_se">{{ collect(DB::table("box_complaints")->where([['id_user',$key->id_user],['id_admin',null]])->get())->count() }}</span></li>
                                                        @endforeach
                                                    </ul>
                                                  </div>
                                        </div>

                                        @endauth
                                    </div>
                                </div>
                                <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r " style="overflow: scroll">
                                    <!-- Chat Box -->
                                    <div class="p-20 gapY-15">
                                        <!-- Chat Conversation -->
                                        @auth('web')
                                        <span class="show_ms_user" id="show_ms_user{{ Auth::user()->id }}">
                                            <input type="hidden" class="id_speeker" id_u="{{ Auth::user()->id }}">
                                        @foreach(DB::table('box_complaints')->where('id_user',Auth::user()->id ?? '')->get() as $key)
                                        @if($key->id_admin != null)
                                        @if($key->text_message != null)
                                        <div class="peers fxw-nw">
                                            <div class="peer mR-20">
                                                <img class="w-2r bdrs-50p" src="{{ DB::table('the_guest')->find($key->id_user)->images }}" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                                                <div class="layers ai-fs gapY-5">

                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mR-10">
                                                                <small>{{ $key->date }}</small>
                                                            </div>
                                                            <div class="peer-greed">
                                                                <span>{{ $key->text_message }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if($key->reply_message != null)
                                        <!-- Chat Conversation -->
                                        <div class="peers fxw-nw ai-fe">

                                            <div class="peer peer-greed ord-0">
                                                <div class="layers ai-fe gapY-10">
                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer-greed mR-10">
                                                                <span>{{ $key->reply_message }} </span>
                                                            </div>
                                                            <br>
                                                            <div class="peer ">
                                                                <small>{{ $key->reply_date }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        @endif
                                        @else
                                        <div class="peers fxw-nw">
                                            <div class="peer mR-20">
                                                <img class="w-2r bdrs-50p" src="{{ DB::table('the_guest')->find($key->id_user)->images }}" alt="">
                                            </div>
                                            <div class="peer peer-greed">
                                                <div class="layers ai-fs gapY-5">

                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mR-10">
                                                                <small>{{ $key->date }}</small>
                                                            </div>
                                                            <div class="peer-greed">
                                                                <span>{{ $key->text_message }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </span>
                                        @endauth

                                        <span class="test" id="ckeck">
                                        @auth('admin')
                                            <input type="hidden" class="id_speeker" id_u="{{ Auth::guard('admin')->user()->id }}">
                                        @endauth
                                    </span>


                                    </div>
                                </div>
                                <div class="layer w-100">
                                    <!-- Chat Send -->
                                    <div class="p-20 bdT bgc-white">
                                        <div class="pos-r">
                                            <input type="text" class="m-0 form-control bdrs-10em text_ms" placeholder="Say something...">
                                            @if(Auth::guard('admin')->check() || Auth::guard('web')->check())
                                            <button type="button" class="p-0 btn btn-primary bdrs-50p w-2r h-2r pos-a r-1 t-1 send_ms">
                                                <i class="fa fa-paper-plane-o"></i>
                                            </button>
                                            @else
                                            <a href="{{ route('login') }}" class="p-0 btn btn-primary bdrs-50p w-2r h-2r pos-a r-1 t-1 send_ms">
                                                <i class="fa fa-paper-plane-o"></i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="js/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
            <script>
                Pusher.logToConsole = true;
                var pusher = new Pusher('7a783e2d8aa18dbc528e', {
                  cluster: 'eu'
                });
                var channel = pusher.subscribe('list_mss');
                channel.bind('App\\Events\\list_ms', function(data){
                    $.ajax({
                        type: "post",
                        url: "{{ route('list_ms') }}",
                        data: {'_token':'{{ csrf_token() }}'},
                        success:function (data){
                            $('.show_ms_user').html(data.ms);
                            $('.send_ms').removeAttr('disabled');
                            $('.users_open').html(data.person);
                            $('.n_sender_ms').text(data.nom);
                            $('.show_ms_admin').html(data.ms);
                            $('.select_user').click(function(event){
                            event.preventDefault();
                            $id=$(this).attr('id_u');
                                $.ajax({
                                    type: "post",
                                    url: "{{ route('select_user_ms') }}",
                                    data: {'_token':'{{ csrf_token() }}','id_selected':$id},
                                    success:function (data){
                                        $('#ckeck').removeClass("test");
                                        $('#ckeck').addClass("show_ms_admin");
                                        $('.show_ms_admin').html(data.ms);
                                        $('.img_u').attr('src',data.img);
                                        $('.name_u').text(data.name);
                                    }
                                });
                            });
                        }
                    });
                });//select_user
                $('.send_ms').click(function(){
                    if($('.text_ms').val() != '' && $('.text_ms').val() != ' ' ){
                    $('.send_ms').attr('disabled','disabled');
                    $.ajax({
                        type: "post",
                        url: "{{ route('send_ms_') }}",
                        data: {'_token':'{{ csrf_token() }}','id_speeker':$('.id_speeker').attr('id_u'),'text_ms':$('.text_ms').val()}
                    });
                    $('.text_ms').val(null);
                    }else{
                        alert("Write a message");
                    }
                });
                $('.select_user').click(function(event){
                event.preventDefault();
                $id=$(this).attr('id_u');
                    $.ajax({
                        type: "post",
                        url: "{{ route('select_user_ms') }}",
                        data: {'_token':'{{ csrf_token() }}','id_selected':$id},
                        success:function (data){
                            $('#ckeck').removeClass("test");
                            $('#ckeck').addClass("show_ms_admin");
                            $('.show_ms_admin').html(data.ms);
                            $('.img_u').attr('src',data.img);
                            $('.name_u').text(data.name);
                        }
                    });
                });
            </script>
</body>
</html>
