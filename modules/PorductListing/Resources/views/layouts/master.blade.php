<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <!-- <title>{{config('constants.SITE_NAME')}} | @yield('title')</title> -->
    <title>Yokart | @yield('title')</title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link href="{{ asset('front/images/App.png')}}" rel="icon" type="image/png">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    {{-- <link href="{{ asset('front/css-thirdparty/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/css-thirdparty/owl.carousel.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/css/main.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('front/js/thirdparty/bootstrap.min.js')}}"></script>
   
    <link rel="stylesheet" href="{{ asset('front/css/custom.css')}}">
    <link href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css" rel="stylesheet">
    {{-- <script src="{{ asset('front/js/thirdparty/jquery-3.2.1.min.js')}}"></script> 
    <link rel='stylesheet' href='https://cdn.rawgit.com/StarPlugins/thumbelina/8b9c09d9/thumbelina.css'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('front/js/thirdparty/owl.carousel.min.js')}}"></script>
    <script src='https://cdn.rawgit.com/StarPlugins/thumbelina/8b9c09d9/thumbelina.js'></script>
    <script  src="{{ asset('front/js/zoom.js') }}"></script> --}}

     <link rel="stylesheet" href="{{ asset('front/css/custom.css')}}">
    <link href="{{ asset('front/css-thirdparty/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/css-thirdparty/owl.carousel.css')}}" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/main.css')}}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('front/js/thirdparty/bootstrap.min.js')}}"></script>
  <!--     <link href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('front/js/thirdparty/owl.carousel.min.js')}}"></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/StarPlugins/thumbelina/8b9c09d9/thumbelina.css'>
    {{-- <link rel="stylesheet" href="{{ asset('front/css/style.css')}}"> --}}

    <script src='https://cdn.rawgit.com/StarPlugins/thumbelina/8b9c09d9/thumbelina.js'></script>
    <script  src="{{ asset('front/js/zoom.js')}}"></script>


    <style type="text/css">
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      #divLoading
      {
          display : none;
      }
      #divLoading .show
      {
        display : block;
        position : fixed;
        z-index: 11111;
        background-image : url('http://technocometsolutions.com/ecomm/front/ajax-spinner.gif');
        background-color:transparent;
        opacity : 1;
        background-repeat : no-repeat;
        background-position : center;
        left : 0;
        bottom : 0;
        right : 0;
        top : 0;
      }
      .modal-dialog
      {
        max-width: 60% !important;
      }
      
    </style>
     
</head>
<body>
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!};
    </script>
    {{-- <div class="wrapper"> --}}
       {{--  <div class="main-header">
            <div class="logo-header" data-background-color="blue">
                <a href="" class="logo">
                    <img src="{{ asset('images/logo-white.png')}}" alt="navbar brand" class="navbar-brand" style="height:60%">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
               <div class="nav-toggle">
                   <button class="btn btn-toggle toggle-sidebar">
                       <i class="icon-menu"></i>
                   </button>
               </div>
            </div>
         
         
        </div> --}}
         
            @include('porductlisting::layouts.header')
            {{ csrf_field() }} 
            @yield('content')
            @include('porductlisting::layouts.footer')
    {{-- </div> --}}

    <!--Core Jquery JS -->
   <script type="text/javascript">
      $(".wholesale-box").hide();
      $(".whole-bx a.more").click(function(){
        $(".wholesale-box").slideToggle();
      });
      $(".product-detail-content-right .wholesale-box a").click(function(){
        $(".wholesale-box").slideUp();
      });
    </script>
   
     <script type="text/javascript" src="{{ asset('front/js/product.js')}}"></script>
    <script type="text/javascript" src="{{ asset('front/js/app.min.js')}}"></script>

</body>
<div id="divLoading">
   </div>
</html>
