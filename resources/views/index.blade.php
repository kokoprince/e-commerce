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
    <title>DreamShop</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('images\logo_2.jpg')}}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- Bootstrap JS --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- StyleSheet -->

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
	<link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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
	@include('head.header'){{-- the nav bar sit --}}

    @include('body.body'){{-- the body sit --}}


    @auth
    <div class="cover_notif">
        @foreach(DB::table('notification')->get() as $valu)
        @if(collect(DB::table('see_notification')->where([['id_notification',$valu->id],['id_user',Auth::user()->id]])->get())->isEmpty())
            <div  class="toast re{{ $valu->id }}">
                <div class="toast-header">
                <strong class="me-auto">DreamShop</strong>
                <small>{{ $valu->date }}</small>
                <button type="button" class="btn-close b_close" i="{{ $valu->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg></button>
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


    @include('footer.footer'){{-- the footer sit --}}

    <!-- Jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('js/easing.js') }}"></script>
	<!-- Active JS -->
    <script src="{{ asset('js/active.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery.flipper-responsive.js"></script>
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
        $(document).ready(function events(){
            var nam=parseInt($('.number_notif').text());
            if(nam == 0){
                $('.number_notif').hide();
            }
            $('.notifi_be').click(function (){
                $('.list_notifi').fadeToggle();
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
                        $('.cover_notif').html(data.body_1);
                        $('.body_list').html(data.body_2);
                        $('.number_notif').text(data.nam);
                        every_event();
                    },error:function(){
                        alert('error in your mission');
                    }
                });
            }
        });

         $('.preloader').fadeOut();
            $('.form_0').on('mouseleave',function(){
                $('.show_hidden').hide();
            });

            $('.search_live').keyup(function(){
                $('.show_hidden').show();
                $.ajax({
                    type: "POST",
                    url: "{{ route('search') }}",
                    data: {'_token':'{{ csrf_token() }}','con':$(this).val()},
                    success: function (response) {
                        $('.show_hidden').html(response);
                        events();
                    }
                });
            });



            $('.click_show_event').on('click',function (){
            $.ajax({
                type: "post",
                url: "{{ route('click_show_event') }}",
                data: {'_token':'{{ csrf_token() }}','num':$(this).attr('n_t'),'id_mun':$(this).attr('id') },
                success: function (response) {
                    hop();
                },
                error: function (response) {
                    alert('error');
                }
            });
        });

            $('.butt').click(function (){
                $.ajax({
                    type: "post",
                    url: "{{ route('event_show_1') }}",
                    data: {'_token':'{{ csrf_token() }}','nm':$(this).attr('content_t')}
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

            $('.btnn').click(function (){
                $.ajax({
                    type: "post",
                    url: "{{ route('seach_event') }}",
                    data: {'_token':'{{ csrf_token() }}','con':$('.search_live').val()}
                });
            });

        });
        </script>
</body>
</html>{{-- Math.max active --}}

{{--
<span class="price-dec">30% Off</span>
<span class="new">New</span>
<span class="out-of-stock">Hot</span>

--}}
