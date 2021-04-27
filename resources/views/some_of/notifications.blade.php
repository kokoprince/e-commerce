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
.row:after, .row:before {
  content: " ";
  display: table;
  clear: both;
}
.span6 {
  float: left;
  width: 48%;
  padding: 1%;
}

.emojionearea-standalone {
  float: right;
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

        <style type="text/css" rel="stylesheet">
            .input-group{
                margin-left: 65%;
            }
            .form-control{
                top:10px;
                text-align: center;
                width: 100%;
                height: 550px;
                background: #1b2a47;
            }
            .cov{
                text-align: center;
                width: 97%;
                height: 490px;
                background: #1b2a47;
                position:absolute;
                left:50%;
                top:10%;
                transform: translate(-50%,5%);
            }
            .form_table{
                width:70%;
                height: 100%;
                position:absolute;
                left:50%;
                top:10%;
                transform: translate(-50%,-10%);
            }
            .Send_Notif{
                position:absolute;
                left:48%;
                bottom:10%;
                transform: translate(-50%,-20%);
                box-shadow: 0px 0px 10px 5px#152036;
            }
            .textar{
                background: white;
                margin-top: 11%;
                box-shadow: 0px 0px 10px 5px gray;
                border-radius: 10px;
                width:90%;
                height:40%;
            }
            .tox{
                background: white;
                margin-top: 11%;
                box-shadow: 0px 0px 10px 5px gray;
                border-radius: 10px;
            }
            .emoji{
                width:200px;
                height:250px;
                background:white;
                overflow:scroll;
                position:fixed;
                right:-190px;
                top:15%;
                border:1px solid gray;
            }
            .btn_emoji{
                background:none;
                border:none;
            }
            .tox-notifications-container{
                display:none;
            }
            .tox-statusbar a{
                display:none;
            }
            .click_emoji{
                cursor: pointer;
                position: relative;
                left:1px;
                top:5px;
                float:left;
                padding:5px;
                margin:5px;
                transition:0.3s;
	            border-radius: 4px;
            }
            .click_emoji:hover{
                background:rgba(136, 136, 136, 0.767);
            }

        </style>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center product-status-wrap" style="margin: 1% 0%">
                    <h2 style="color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">welcome MR.{{ Auth::guard('admin')->user()->name }},  on this page, you can write a notification and it will reach all users </h2>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30" style="height: 34.4pc;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center product-status-wrap cov" style="margin: 0% 0%">
                                <form method="post" class="form_table" enctype="multipart/form-data">
                                    @csrf
                                    <div class="emoji">
                                        <span class="click_emoji">&#8986;</span>
                                        <span class="click_emoji">&#8987;</span>
                                        <span class="click_emoji">&#9193;</span>
                                        <span class="click_emoji">&#9194;</span>
                                        <span class="click_emoji">&#9195;</span>
                                        <span class="click_emoji">&#9196;</span>
                                        <span class="click_emoji">&#9197;</span>
                                        <span class="click_emoji">&#9198;</span>
                                        <span class="click_emoji">&#9199;</span>
                                        <span class="click_emoji">&#9200;</span>
                                        <span class="click_emoji">&#9201;</span>
                                        <span class="click_emoji">&#9202;</span>
                                        <span class="click_emoji">&#9203;</span>
                                        <span class="click_emoji">&#9208;</span>
                                        <span class="click_emoji">&#9209;</span>
                                        <span class="click_emoji">&#9210;</span>
                                        <span class="click_emoji">&#9410;</span>
                                        <span class="click_emoji">&#9748;</span>
                                        <span class="click_emoji">&#9749;</span>
                                        <span class="click_emoji">&#9757;</span>
                                        <span class="click_emoji">&#9800;</span>
                                        <span class="click_emoji">&#9801;</span>
                                        <span class="click_emoji">&#9802;</span>
                                        <span class="click_emoji">&#9803;</span>
                                        <span class="click_emoji">&#9804;</span>
                                        <span class="click_emoji">&#9805;</span>
                                        <span class="click_emoji">&#9806;</span>
                                        <span class="click_emoji">&#9807;</span>
                                        <span class="click_emoji">&#9808;</span>
                                        <span class="click_emoji">&#9809;</span>
                                        <span class="click_emoji">&#9810;</span>
                                        <span class="click_emoji">&#9811;</span>
                                        <span class="click_emoji">&#9823;</span>
                                        <span class="click_emoji">&#9855;</span>
                                        <span class="click_emoji">&#9875;</span>
                                        <span class="click_emoji">&#9889;</span>
                                        <span class="click_emoji">&#9898;</span>
                                        <span class="click_emoji">&#9899;</span>
                                        <span class="click_emoji">&#9917;</span>
                                        <span class="click_emoji">&#9918;</span>
                                        <span class="click_emoji">&#9924;</span>
                                        <span class="click_emoji">&#9925;</span>
                                        <span class="click_emoji">&#9934;</span>
                                        <span class="click_emoji">&#9935;</span>
                                        <span class="click_emoji">&#9937;</span>
                                        <span class="click_emoji">&#9939;</span>
                                        <span class="click_emoji">&#9940;</span>
                                        <span class="click_emoji">&#9961;</span>
                                        <span class="click_emoji">&#9962;</span>
                                        <span class="click_emoji">&#9968;</span>
                                        <span class="click_emoji">&#9969;</span>
                                        <span class="click_emoji">&#9970;</span>
                                        <span class="click_emoji">&#9971;</span>
                                        <span class="click_emoji">&#9972;</span>
                                        <span class="click_emoji">&#9973;</span>
                                        <span class="click_emoji">&#9975;</span>
                                        <span class="click_emoji">&#9976;</span>
                                        <span class="click_emoji">&#9977;</span>
                                        <span class="click_emoji">&#9978;</span>
                                        <span class="click_emoji">&#9981;</span>
                                        <span class="click_emoji">&#9986;</span>
                                        <span class="click_emoji">&#9989;</span>
                                        <span class="click_emoji">&#9992;</span>
                                        <span class="click_emoji">&#9993;</span>
                                        <span class="click_emoji">&#9994;</span>
                                        <span class="click_emoji">&#9995;</span>
                                        <span class="click_emoji">&#9996;</span>
                                        <span class="click_emoji">&#9997;</span>
                                        <span class="click_emoji">&#9999;</span>
                                        <span class="click_emoji">&#10002;</span>
                                        <span class="click_emoji">&#10004;</span>
                                        <span class="click_emoji">&#10006;</span>
                                        <span class="click_emoji">&#10013;</span>
                                        <span class="click_emoji">&#10017;</span>
                                        <span class="click_emoji">&#10024;</span>
                                        <span class="click_emoji">&#10035;</span>
                                        <span class="click_emoji">&#10036;</span>
                                        <span class="click_emoji">&#10052;</span>
                                        <span class="click_emoji">&#10055;</span>
                                        <span class="click_emoji">&#10060;</span>
                                        <span class="click_emoji">&#10062;</span>
                                        <span class="click_emoji">&#10067;</span>
                                        <span class="click_emoji">&#10068;</span>
                                        <span class="click_emoji">&#10069;</span>
                                        <span class="click_emoji">&#10071;</span>
                                        <span class="click_emoji">&#10083;</span>
                                        <span class="click_emoji">&#10084;</span>
                                        <span class="click_emoji">&#10133;</span>
                                        <span class="click_emoji">&#10134;</span>
                                        <span class="click_emoji">&#10135;</span>
                                        <span class="click_emoji">&#10145;</span>
                                        <span class="click_emoji">&#10160;</span>
                                        <span class="click_emoji">&#10175;</span>
                                        <span class="click_emoji">&#10548;</span>
                                        <span class="click_emoji">&#10549;</span>
                                        <span class="click_emoji">&#11013;</span>
                                        <span class="click_emoji">&#11014;</span>
                                        <span class="click_emoji">&#11015;</span>
                                        <span class="click_emoji">&#11035;</span>
                                        <span class="click_emoji">&#11036;</span>
                                        <span class="click_emoji">&#11088;</span>
                                        <span class="click_emoji">&#11093;</span>
                                        <span class="click_emoji">&#12336;</span>
                                        <span class="click_emoji">&#12349;</span>
                                        <span class="click_emoji">&#12951;</span>
                                        <span class="click_emoji">&#12953;</span>
                                        <span class="click_emoji">&#126980;</span>
                                        <span class="click_emoji">&#129330;</span>
                                        <span class="click_emoji">&#129488;</span>
                                        <span class="click_emoji">&#127183;</span>
                                        <span class="click_emoji">&#127744;</span>
                                        <span class="click_emoji">&#129492;</span>
                                        <span class="click_emoji">&#127745;</span>
                                        <span class="click_emoji">&#127746;</span>
                                        <span class="click_emoji">&#127747;</span>
                                        <span class="click_emoji">&#127748;</span>
                                        <span class="click_emoji">&#127749;</span>
                                        <span class="click_emoji">&#127750;</span>
                                        <span class="click_emoji">&#127751;</span>
                                        <span class="click_emoji">&#127752;</span>
                                        <span class="click_emoji">&#127753;</span>
                                        <span class="click_emoji">&#127754;</span>
                                        <span class="click_emoji">&#127755;</span>
                                        <span class="click_emoji">&#127756;</span>
                                        <span class="click_emoji">&#127760;</span>
                                        <span class="click_emoji">&#127761;</span>
                                        <span class="click_emoji">&#127762;</span>
                                        <span class="click_emoji">&#127763;</span>
                                        <span class="click_emoji">&#127764;</span>
                                        <span class="click_emoji">&#127765;</span>
                                        <span class="click_emoji">&#127766;</span>
                                        <span class="click_emoji">&#127767;</span>
                                        <span class="click_emoji">&#127768;</span>
                                        <span class="click_emoji">&#127769;</span>
                                        <span class="click_emoji">&#127770;</span>
                                        <span class="click_emoji">&#127771;</span>
                                        <span class="click_emoji">&#127772;</span>
                                        <span class="click_emoji">&#127773;</span>
                                        <span class="click_emoji">&#127774;</span>
                                        <span class="click_emoji">&#127775;</span>
                                        <span class="click_emoji">&#127776;</span>
                                        <span class="click_emoji">&#127777;</span>
                                        <span class="click_emoji">&#127780;</span>
                                        <span class="click_emoji">&#127781;</span>
                                        <span class="click_emoji">&#127782;</span>
                                        <span class="click_emoji">&#127783;</span>
                                        <span class="click_emoji">&#127784;</span>
                                        <span class="click_emoji">&#127785;</span>
                                        <span class="click_emoji">&#127786;</span>
                                        <span class="click_emoji">&#127787;</span>
                                        <span class="click_emoji">&#127788;</span>
                                        <span class="click_emoji">&#127789;</span>
                                        <span class="click_emoji">&#127790;</span>
                                        <span class="click_emoji">&#127791;</span>
                                        <span class="click_emoji">&#127792;</span>
                                        <span class="click_emoji">&#127793;</span>
                                        <span class="click_emoji">&#127794;</span>
                                        <span class="click_emoji">&#127795;</span>
                                        <span class="click_emoji">&#127796;</span>
                                        <span class="click_emoji">&#127797;</span>
                                        <span class="click_emoji">&#127798;</span>
                                        <span class="click_emoji">&#127799;</span>
                                        <span class="click_emoji">&#127800;</span>
                                        <span class="click_emoji">&#127801;</span>
                                        <span class="click_emoji">&#127802;</span>
                                        <span class="click_emoji">&#127803;</span>
                                        <span class="click_emoji">&#127808;</span>
                                        <span class="click_emoji">&#127826;</span>
                                        <span class="click_emoji">&#127828;</span>
                                        <span class="click_emoji">&#127829;</span>
                                        <span class="click_emoji">&#127830;</span>
                                        <span class="click_emoji">&#127831;</span>
                                        <span class="click_emoji">&#127838;</span>
                                        <span class="click_emoji">&#127839;</span>
                                        <span class="click_emoji">&#127840;</span>
                                        <span class="click_emoji">&#127843;</span>
                                        <span class="click_emoji">&#127844;</span>
                                        <span class="click_emoji">&#127846;</span>
                                        <span class="click_emoji">&#127849;</span>
                                        <span class="click_emoji">&#127850;</span>
                                        <span class="click_emoji">&#127855;</span>
                                        <span class="click_emoji">&#127856;</span>
                                        <span class="click_emoji">&#127857;</span>
                                        <span class="click_emoji">&#127858;</span>
                                        <span class="click_emoji">&#127866;</span>
                                        <span class="click_emoji">&#127867;</span>
                                        <span class="click_emoji">&#127869;</span>
                                        <span class="click_emoji">&#127870;</span>
                                        <span class="click_emoji">&#127871;</span>
                                        <span class="click_emoji">&#127872;</span>
                                        <span class="click_emoji">&#127873;</span>
                                        <span class="click_emoji">&#127874;</span>
                                        <span class="click_emoji">&#127875;</span>
                                        <span class="click_emoji">&#127876;</span>
                                        <span class="click_emoji">&#127877;</span>
                                        <span class="click_emoji">&#127878;</span>
                                        <span class="click_emoji">&#127879;</span>
                                        <span class="click_emoji">&#127880;</span>
                                        <span class="click_emoji">&#127881;</span>
                                        <span class="click_emoji">&#127882;</span>
                                        <span class="click_emoji">&#127883;</span>
                                        <span class="click_emoji">&#127884;</span>
                                        <span class="click_emoji">&#127885;</span>
                                        <span class="click_emoji">&#127890;</span>
                                        <span class="click_emoji">&#127891;</span>
                                        <span class="click_emoji">&#127904;</span>
                                        <span class="click_emoji">&#127905;</span>
                                        <span class="click_emoji">&#127909;</span>
                                        <span class="click_emoji">&#127911;</span>
                                        <span class="click_emoji">&#127912;</span>
                                        <span class="click_emoji">&#127913;</span>
                                        <span class="click_emoji">&#127914;</span>
                                        <span class="click_emoji">&#127916;</span>
                                        <span class="click_emoji">&#127917;</span>
                                        <span class="click_emoji">&#127918;</span>
                                        <span class="click_emoji">&#127919;</span>
                                        <span class="click_emoji">&#127922;</span>
                                        <span class="click_emoji">&#127925;</span>
                                        <span class="click_emoji">&#127926;</span>
                                        <span class="click_emoji">&#127932;</span>
                                        <span class="click_emoji">&#127947;</span>
                                        <span class="click_emoji">&#128064;</span>
                                        <span class="click_emoji">&#128065;</span>
                                        <span class="click_emoji">&#128066;</span>
                                        <span class="click_emoji">&#128067;</span>
                                        <span class="click_emoji">&#128068;</span>
                                        <span class="click_emoji">&#128069;</span>
                                        <span class="click_emoji">&#128070;</span>
                                        <span class="click_emoji">&#128071;</span>
                                        <span class="click_emoji">&#128072;</span>
                                        <span class="click_emoji">&#128073;</span>
                                        <span class="click_emoji">&#128074;</span>
                                        <span class="click_emoji">&#128075;</span>
                                        <span class="click_emoji">&#128076;</span>
                                        <span class="click_emoji">&#128077;</span>
                                        <span class="click_emoji">&#128078;</span>
                                        <span class="click_emoji">&#128079;</span>
                                        <span class="click_emoji">&#128080;</span>
                                        <span class="click_emoji">&#128081;</span>
                                        <span class="click_emoji">&#128099;</span>
                                        <span class="click_emoji">&#128148;</span>
                                        <span class="click_emoji">&#128150;</span>
                                        <span class="click_emoji">&#128151;</span>
                                        <span class="click_emoji">&#128152;</span>
                                        <span class="click_emoji">&#128153;</span>
                                        <span class="click_emoji">&#128154;</span>
                                        <span class="click_emoji">&#128155;</span>
                                        <span class="click_emoji">&#128156;</span>
                                        <span class="click_emoji">&#128266;</span>
                                        <span class="click_emoji">&#128271;</span>
                                        <span class="click_emoji">&#128273;</span>
                                        <span class="click_emoji">&#128274;</span>
                                        <span class="click_emoji">&#128275;</span>
                                        <span class="click_emoji">&#128314;</span>
                                        <span class="click_emoji">&#128315;</span>
                                        <span class="click_emoji">&#128400;</span>
                                        <span class="click_emoji">&#128405;</span>
                                        <span class="click_emoji">&#128406;</span>
                                        <span class="click_emoji">&#128420;</span>
                                        <span class="click_emoji">&#128512;</span>
                                        <span class="click_emoji">&#128513;</span>
                                        <span class="click_emoji">&#128514;</span>
                                        <span class="click_emoji">&#128515;</span>
                                        <span class="click_emoji">&#128516;</span>
                                        <span class="click_emoji">&#128517;</span>
                                        <span class="click_emoji">&#128518;</span>
                                        <span class="click_emoji">&#128519;</span>
                                        <span class="click_emoji">&#128520;</span>
                                        <span class="click_emoji">&#128521;</span>
                                        <span class="click_emoji">&#128522;</span>
                                        <span class="click_emoji">&#128523;</span>
                                        <span class="click_emoji">&#128524;</span>
                                        <span class="click_emoji">&#128525;</span>
                                        <span class="click_emoji">&#128526;</span>
                                        <span class="click_emoji">&#128527;</span>
                                        <span class="click_emoji">&#128528;</span>
                                        <span class="click_emoji">&#128529;</span>
                                        <span class="click_emoji">&#128530;</span>
                                        <span class="click_emoji">&#128531;</span>
                                        <span class="click_emoji">&#128532;</span>
                                        <span class="click_emoji">&#128533;</span>
                                        <span class="click_emoji">&#128534;</span>
                                        <span class="click_emoji">&#128535;</span>
                                        <span class="click_emoji">&#128536;</span>
                                        <span class="click_emoji">&#128537;</span>
                                        <span class="click_emoji">&#128538;</span>
                                        <span class="click_emoji">&#128539;</span>
                                        <span class="click_emoji">&#128540;</span>
                                        <span class="click_emoji">&#128541;</span>
                                        <span class="click_emoji">&#128542;</span>
                                        <span class="click_emoji">&#128543;</span>
                                        <span class="click_emoji">&#128544;</span>
                                        <span class="click_emoji">&#128545;</span>
                                        <span class="click_emoji">&#128546;</span>
                                        <span class="click_emoji">&#128547;</span>
                                        <span class="click_emoji">&#128548;</span>
                                        <span class="click_emoji">&#128549;</span>
                                        <span class="click_emoji">&#128550;</span>
                                        <span class="click_emoji">&#128551;</span>
                                        <span class="click_emoji">&#128552;</span>
                                        <span class="click_emoji">&#128553;</span>
                                        <span class="click_emoji">&#128554;</span>
                                        <span class="click_emoji">&#128555;</span>
                                        <span class="click_emoji">&#128556;</span>
                                        <span class="click_emoji">&#128557;</span>
                                        <span class="click_emoji">&#128558;</span>
                                        <span class="click_emoji">&#128559;</span>
                                        <span class="click_emoji">&#128560;</span>
                                        <span class="click_emoji">&#128561;</span>
                                        <span class="click_emoji">&#128562;</span>
                                        <span class="click_emoji">&#128563;</span>
                                        <span class="click_emoji">&#128564;</span>
                                        <span class="click_emoji">&#128565;</span>
                                        <span class="click_emoji">&#128566;</span>
                                        <span class="click_emoji">&#128567;</span>
                                        <span class="click_emoji">&#128568;</span>
                                        <span class="click_emoji">&#128569;</span>
                                        <span class="click_emoji">&#128570;</span>
                                        <span class="click_emoji">&#128571;</span>
                                        <span class="click_emoji">&#128572;</span>
                                        <span class="click_emoji">&#128573;</span>
                                        <span class="click_emoji">&#128574;</span>
                                        <span class="click_emoji">&#128575;</span>
                                        <span class="click_emoji">&#128576;</span>
                                        <span class="click_emoji">&#128577;</span>
                                        <span class="click_emoji">&#128578;</span>
                                        <span class="click_emoji">&#128579;</span>
                                        <span class="click_emoji">&#128580;</span>
                                        <span class="click_emoji">&#128581;</span>
                                        <span class="click_emoji">&#128582;</span>
                                        <span class="click_emoji">&#128588;</span>
                                        <span class="click_emoji">&#128591;</span>
                                        <span class="click_emoji">&#128640;</span>
                                        <span class="click_emoji">&#128721;</span>
                                        <span class="click_emoji">&#128722;</span>
                                        <span class="click_emoji">&#129296;</span>
                                        <span class="click_emoji">&#129297;</span>
                                        <span class="click_emoji">&#129298;</span>
                                        <span class="click_emoji">&#129299;</span>
                                        <span class="click_emoji">&#129300;</span>
                                        <span class="click_emoji">&#129301;</span>
                                        <span class="click_emoji">&#129302;</span>
                                        <span class="click_emoji">&#129303;</span>
                                        <span class="click_emoji">&#129304;</span>
                                        <span class="click_emoji">&#129305;</span>
                                        <span class="click_emoji">&#129306;</span>
                                        <span class="click_emoji">&#129307;</span>
                                        <span class="click_emoji">&#129308;</span>
                                        <span class="click_emoji">&#129309;</span>
                                        <span class="click_emoji">&#129310;</span>
                                        <span class="click_emoji">&#129311;</span>
                                        <span class="click_emoji">&#129312;</span>
                                        <span class="click_emoji">&#129313;</span>
                                        <span class="click_emoji">&#129314;</span>
                                        <span class="click_emoji">&#129315;</span>
                                        <span class="click_emoji">&#129316;</span>
                                        <span class="click_emoji">&#129317;</span>
                                        <span class="click_emoji">&#129318;</span>
                                        <span class="click_emoji">&#129319;</span>
                                        <span class="click_emoji">&#129320;</span>
                                        <span class="click_emoji">&#129321;</span>
                                        <span class="click_emoji">&#129322;</span>
                                        <span class="click_emoji">&#129323;</span>
                                        <span class="click_emoji">&#129324;</span>
                                        <span class="click_emoji">&#129325;</span>
                                        <span class="click_emoji">&#129326;</span>
                                        <span class="click_emoji">&#129327;</span>
                                    </div>
                                    <textarea class="textar" placeholder="you can write a notification in here"></textarea>
                                            <div class="text-center custom-pro-edt-ds">
                                                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10 Send_Notif">
                                                    Send Notification
                                                </button>
                                            </div>
                                </form>
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
<script class="eventers">
    $(document).ready(function ready_do(){
        $('.click_emoji').click(function ven(){
            $('.textar').append($(this).text());
        });
        $('.textar').keyup(function () {
                var v_1=$('.textar').val();
            $('.click_emoji').click(function(){
                var v_2=$(this).text();
                $('.textar').val(v_1+v_2);
            });
        });

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
        $('.Send_Notif').click(function (event) {
            event.preventDefault();
            $('.Send_Notif').attr('disabled','disabled');
            $.ajax({
                type: "POST",
                url: "{{ route('Send_Notif') }}",
                data: {'_token':'{{ csrf_token() }}','content':$('.textar').val()},
                success:function(){
                    $('.sh').slideDown(function () {
                            $('.sh').delay(5000).slideUp();
                        });
                        $('.Send_Notif').removeAttr('disabled');
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
