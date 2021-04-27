<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>DreamShop</title>
<style>
  *{
    padding:0%;
    margin:0%;
  }
        .img_person{
            width: 250px;
            height:300px;
            border: 1px solid black;
            border-radius: 5px;
            position: relative;
            left: 38%;
            top: 0%;
            padding: 1.5px;
        }
        .start_user{
            width:4em;
            border:2px solid;
            position: fixed;
            top:38%;
            left:30%;
            font-size:10em;
            text-align: center;
            color:gray;
        }
        .shet_line{
        text-decoration: line-through;
        }
        .title_{
            position:relative;
            left:0px;
            top:0px;
            width:100%;
            padding:1px
    }
    .price-dec{
        position: absolute;
        right: 0px;
        top:5px;
        background-color: rgba(248, 53, 53, 0.89);
        color:white;
        border-radius: 10px;
        width: 50px;
        text-align: center;
    }

</style>
  <!-- Template CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="handels/css/style-starter.css">
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  <style>
    .toast{
        position:relative;
        right:1%;
        top: 10px;
        opacity:1;
    }
    .toast:not(.showing):not(.show){
        opacity:1;
    }
    body{
    position: relative;
    }
    .toast_{
    overflow: hidden;
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
    color:rgb(63, 0, 134)
    }
    ._toast_{
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgb(255, 255, 255);
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    opacity: 1;
    border-radius: 0.25rem;
    position:relative;
    width:100%;
    left:0px;
    padding:5px;
    }
    .list_notif{
        position:absolute;
        right:-500px;
        height:350px;
        overflow:scroll;
    }
    .div_s{
        z-index:9999;
    }
    .box_notifi{
        position:fixed;
        right:0%;
        bottom:0%;
        height:300px;
        z-index:11;
    }
    .mov{
        position:absolute;
        left:25%;
        top:6.5px;
    }
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      overflow: hidden;
    }
    .preloader-inner {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%,-50%);
      -moz-transform: translate(-50%,-50%);
      transform: translate(-50%,-50%);
    }
    .preloader-icon {
      width: 100px;
      height: 100px;
      display: inline-block;
      padding: 0px;
    }
    .preloader-icon span {
      position: absolute;
      display: inline-block;
      width: 100px;
      height: 100px;
      border-radius: 100%;
      background:#F7941D;
      -webkit-animation: preloader-fx 1.6s linear infinite;
      animation: preloader-fx 1.6s linear infinite;
    }
    .preloader-icon span:last-child {
      animation-delay: -0.8s;
      -webkit-animation-delay: -0.8s;
    }
    @keyframes preloader-fx {
      0% {transform: scale(0, 0); opacity:0.5;}
      100% {transform: scale(1, 1); opacity:0;}
    }
    @-webkit-keyframes preloader-fx {
      0% {-webkit-transform: scale(0, 0); opacity:0.5;}
      100% {-webkit-transform: scale(1, 1); opacity:0;}
    }

    .profile_img span{
    background-color: rgba(255, 0, 0, 0.85);
    width: 10px;
    height: 19px;
    border-radius: 10px;
    position: relative;
    right:-28px;
    top:-5px;
    color:white;
    text-align: center;
    font-size:12px;
    display:inline-block;
    }
    </style>
</head>
<body class="sidebar-menu-collapsed the_site" style="width: 100%">
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
    <div class="box_notifi">
            @foreach(DB::table('notification')->get() as $valu)
            @if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                <div  class="toast re{{ $valu->id }}">
                    <div class="toast-header">
                    <strong class="me-auto">DreamShop</strong>
                    <small>{{ $valu->date }}</small>
                    <button type="button" class="btn-close b_close" i="{{ $valu->id }}"></button>
                    </div>
                    <div class="toast-body">
                        {{ $valu->content }}
                    </div>
                </div>
                @endif
            @endforeach
    </div>


<section>  sticky-sidebar-menu

  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <div class="text-center logo-icon logo">
      <a href="index.html" title="logo"><img src="handels/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="{{ route('DreamShop') }}"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
          </svg><span>Home</span></a>
        </li>
        <li class="active"><a href="" class="click_show_pro_lo"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
          </svg><span>my love product</span></a>
        </li>
        <li class="active"><a href="{{ route('cart') }}"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg><span>the cart</span></a>
        </li>
        <li class="active"><a href="" class="click_show_m_o"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
            <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
          </svg><span>My purchases</span></a>
        </li>
      </ul>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">





    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
            <div class="profile_details">
                <ul class="div_s">
                  <li class="dropdown profile_details_drop">
                    <a style="cursor: pointer" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                      aria-expanded="false">
                      <div class="profile_img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>

                            <span class="number_notif" k="{{ $vars=0 }}">
                                {{ collect(DB::select("SELECT notification.id FROM notification, see_notification WHERE notification.id != see_notification.id_notification"))->count() }}
                            </span>
                        </svg>
                      </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu list_notif" aria-labelledby="dropdownMenu3" style="width:400px;margin-left: -355px;">
                      <li class="user-info">
                          <span style="color: white;font-size: 18px;padding:0px;margin:0px;">notification</span>
                        </li>
                        @if(collect(DB::table('notification')->get())->isEmpty())
                        <li style="margin-top: 5px;margin-bottom: 5px;width:100%">
                          <h2 style="margin-left: 35%;margin-top:20%;font-size:40px;color:gray">nothing</h2>
                        </li>
                        @endif
            @foreach(DB::table('notification')->get() as $valu)
            @if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty())
                        <li style="margin-top: 5px;margin-bottom: 5px;width:100%"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
                        <div  class="toast_"style="width:100%;">
                            <div class="toast-header">
                            <strong class="me-auto">DreamShop</strong>
                            <small class="small{{$valu->id}}">{{ $valu->date }}</small>
                            </div>
                            <div class="toast-body">
                                {{ $valu->content }}
                            </div>
                        </div></li>
                        @else
                        <li style="margin-top: 5px;margin-bottom: 5px;width:100%"><div class="text-white border-0 _toast_ d-flex" role="alert" aria-live="assertive" aria-atomic="true">
                            <div  class="toast_"style="width:100%;">
                                <div class="toast-header">
                                <strong class="me-auto">DreamShop</strong>
                                <small class="small{{$valu->id}}">{{ $valu->date }} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye mov" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                  </svg></small>
                                </div>
                                <div class="toast-body">
                                    {{ $valu->content }}
                                </div>
                            </div></li>
                        @endif
                    @endforeach
                    </ul>
                  </li>
                </ul>
              </div>
        <div class="user-dropdown-details d-flex">

          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a style="cursor: pointer" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="{{ Auth::user()->images }}" title="{{ Auth::user()->name }}" class="rounded-circle img_person" alt="" />
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name">{{ Auth::user()->name }}</h5>
                    <span class="ml-2 status">welcome</span>
                  </li>
                  <li> <a href="" class="show_pro_2"><i class="lnr lnr-cog"></i>Setting</a> </li>
                  <li class="logout"> <a href="{{ route('login') }}" class="logout"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <div class="main-content">
    <div class="container-fluid content-top-gap">
        @include('some_of_page_profile.'.session()->get('go_pages') ?? 'index')
    </div>
  </div>
</section>

<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="handels/js/jquery-3.3.1.min.js"></script>
<script src="handels/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="handels/js/Chart.min.js"></script>
<script src="handels/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="handels/js/bar.js"></script>
<script src="handels/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="handels/js/jquery.nicescroll.js"></script>
<script src="handels/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="handels/js/modernizr.js"></script>
 <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
 <script>

     $(window).load(function every_event() {
        var nam=parseInt($('.number_notif').text());
            if(nam == 0){
                $('.number_notif').hide();
            }
         $('.preloader').fadeOut();

         Pusher.logToConsole = true;
     var pusher = new Pusher('7a783e2d8aa18dbc528e', {
     cluster: 'eu'
     });

         var channel = pusher.subscribe('send_n');
        channel.bind('App\\Events\\send_notifi', function(dat){
            if(dat.case == 'Done')
            {
                $.ajax({
                    type: "POST",
                    url: "{{ route('get_all_notification') }}",
                    data: {'_token':'{{ csrf_token() }}'},
                    success:function(data){
                        $('.box_notifi').html(data.body_1);
                        $('.list_notif').html(data.body_2);
                        $('.number_notif').text(data.nam);
                        every_event();
                    },error:function(){
                        alert('error in your mission');
                    }
                });
            }
        });

         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");//
//-------------------------------------------------------------------------------------------------------------------------------------------------
         $('.click_show_pro_lo').click(function(event){
          $.ajax({
                    type: "POST",
                    url: "{{ route('show_events_pro') }}",
                    data: {'_token':'{{ csrf_token() }}','message':'carts'}
                });
         });
         $('.click_show_m_o').click(function(event){
          $.ajax({
                    type: "POST",
                    url: "{{ route('show_events_pro') }}",
                    data: {'_token':'{{ csrf_token() }}','message':'order'}
                });
         });
         $('.show_pro_2').click(function(event){
          $.ajax({
                    type: "POST",
                    url: "{{ route('show_events_pro') }}",
                    data: {'_token':'{{ csrf_token() }}','message':'settings'}
                });
         });
//--------------------------------------------------------------------------------------------------------------------------------------------------
         $('.drop_pro').click(function (event) {
             var name_t=$(this).attr('data_name_t');
             var id_pro=$(this).attr('data_id_pro');
            $.ajax({
                    type: "POST",
                    url: "{{ route('drop_pro_user') }}",
                    data: {'_token':'{{ csrf_token() }}','name_t':name_t,'id_pro':id_pro},
                    success: function (response) {
                        if(name_t == 'cars'){
                        $('#c'+id_pro).remove();
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(4000).slideUp();
                        });
                        }else if(name_t == 'clothes'){
                        $('#cl'+id_pro).remove();
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(4000).slideUp();
                        });
                        }else if(name_t == 'computers'){
                        $('#com'+id_pro).remove();
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(4000).slideUp();
                        });
                        }else if(name_t == 'books'){
                        $('#bo'+id_pro).remove();
                        $('.not_delete').slideDown(function () {
                            $('.not_delete').delay(4000).slideUp();
                        });
                        }
                    },
                    error: function (response) {
                        alert('error');
                    }
                });
         });
         $('.save').click(function (event) {
                event.preventDefault();
            var data=new FormData($('.form_table')[0]);
            $.ajax({
                type: "post",
                enctype:'multipart/form-data',
                url: "{{ route('update_profile_user') }}",
                data: data,
                processData:false,
                contentType:false,
                cache:false,
                success:function (D){
                    $('.img_person').attr('src',D.image);
                    $('.img_person').attr('title',D.name);
                    $('.user-name').text(D.name);
                    $('.sh').slideDown(function () {
                        $('.sh').delay(4000).slideUp();
                    });
                },error:function (){
                    alert('do_error');
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
        $('.b_close').click(function (event) {
                event.preventDefault();
                var data1=$(this).attr('i');
            $.ajax({
                type: "POST",
                url: "{{ route('i_see_notification') }}",
                data: {'_token':'{{ csrf_token() }}','data1':data1},
                success:function (data) {
                    $('.re'+data1).fadeOut(function(){
                        $('.re'+data1).remove();
                        $('.small'+data1).html(data.date+''+data.body);
                    });
                }
            });
        });
     });

 </script>
<script src="handels/js/bootstrap.min.js"></script>
</body>

</html>
