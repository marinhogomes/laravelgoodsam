<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GoodSam - Find Volunteer Jobs Fast</title>
<link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/color.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css">]
<!--
<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
-->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="theme-style-1">
  <div id="wrapper">
      @include('layouts.header')
      @yield('content')
      @include('layouts.footer')
  </div>
  <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script> 
  <script src="{{asset('js/bootstrap.min.js')}}"></script> 
  <script src="{{asset('js/owl.carousel.min.js')}}"></script> 
  <script src="{{asset('js/jquery.velocity.min.js')}}"></script> 
  <script src="{{asset('js/jquery.kenburnsy.js')}}"></script> 
  <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script> 
  <script src="{{asset('js/custom.js')}}"></script>
  @yield('scripts')
  </body>
  </html>
