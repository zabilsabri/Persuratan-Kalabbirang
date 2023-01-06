<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Kalabbirang | Berita</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="aviato" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user-style/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{ asset('style/node_modules/ionicons201/css/ionicons.min.css')}}">

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('user-style/plugins/themefisher-font/style.css')}}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('user-style/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('user-style/plugins/animate/animate.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('user-style/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('user-style/plugins/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('user-style/css/style.css')}}">


</head>

<body id="body">

   @include('user.layouts.nav')

    @yield('content')

    <!--
Start Call To Action
==================================== -->



    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('user-style/plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('user-style/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('user-style/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('user-style/plugins/instafeed/instafeed.min.js')}}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{ asset('user-style/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
    <!-- Count Down Js -->
    <script src="{{ asset('user-style/plugins/syo-timer/build/jquery.syotimer.min.js')}}"></script>

    <!-- slick Carousel -->
    <script src="{{ asset('user-style/plugins/slick/slick.min.js')}}"></script>
    <script src="{{ asset('user-style/plugins/slick/slick-animation.min.js')}}"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="{{ asset('user-style/js/script.js')}}"></script>
    <script src="{{ asset('style/js/page/modules-ion-icons.js')}}"></script>
    


</body>

</html>
