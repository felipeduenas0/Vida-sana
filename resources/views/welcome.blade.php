<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Title -->
    <title>Vida Sana</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }} ">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
<!-- PRELOADER -->
@include('components.template.preLoader')

<!-- HEADER -->
@include('components.template.header')

<!-- PAGES -->
@yield('start')
@yield('about')
@yield('news')
@yield('shop')
@yield('cart')

<!-- BLOGS -->
@yield('single-news')
@yield('fibras')
@yield('pnaturales')
@yield('desintox')
@yield('product')

<!-- FOOTER -->
@include('components.template.footer')

<!-- SWEETALERT -->
@include('sweetalert::alert')

<!-- jquery -->
<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ assert('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- count down -->
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('js/jquery.isotope-3.0.6.min.js') }}"></script>
<!-- waypoints -->
<script src="{{ asset('js/waypoints.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- mean menu -->
<script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<!-- sticker js -->
<script src="{{ asset('js/sticker.js') }}"></script>
<!-- main js -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
