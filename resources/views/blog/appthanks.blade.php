<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landrada') }}/favicon.png">
  <link rel="icon" type="image/png" href="{{ asset('landrada') }}/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta name="googlebot" content="index">
  <meta name="robots" content="follow">

  {!! SEOMeta::generate() !!}
  {!! OpenGraph::generate() !!}
  {!! Twitter::generate() !!}

  <meta itemprop="image" content="{{ asset('landrada/blog/articulos/construye-tu-patrimonio.jpg')}} ">



  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- CSS Files with SCSS-->
  <link href="{{ asset('css') }}/material-kit.css?v=2.1.1" rel="stylesheet" />

  <style>
    @font-face {
      font-family: Boston-Regular;
      src: url('/fonts/Boston-Regular.otf');
    }

    body {
      font-family: 'Boston-Regular', serif;
    }
    .main-raised{
            margin: 0px!important;
            margin-top: 60px!important;
        }
  </style>
  @stack('style')

</head>

<body class="sidebar-collapse {{ $class }}">
  @include('blog.layouts.navs.nav')
  <div class="main main-raised">
    @yield('content')
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('material') }}/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{ asset('material') }}/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>

  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('material') }}/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>

  <!--	Plugin for Small Gallery in Product Page -->
  <script src="{{ asset('material') }}/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <<script src="{{ asset('material') }}/js/modernizr.js" type="text/javascript"></script>
  <script src="{{ asset('material') }}/js/vertical-nav.js" type="text/javascript"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <!-- <script src="{{ asset('material') }}/demo/demo.js" type="text/javascript"></script> -->

  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('material') }}/js/material-kit.js?v=2.1.1" type="text/javascript"></script>

  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/887c7209c19bb8a15558e1a87/95d56b3e40a96f7e3c61907ea.js");</script>
  @stack('js')

</body>

</html>