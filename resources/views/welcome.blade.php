<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Title -->
    <title>Y2K - Sogamoso</title>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/globalStyles.css') }}" rel="stylesheet">

    <!-- Style sections -->
    @yield('startStyles')
    @yield('makeOrderStyles')
</head>

<body>

<!-- NAVBAR -->
@include('components.navbar')

<!-- CONTENT -->
@yield('start')
@yield('makeOrder')

<!-- FOOTER -->
@include('components.footer')

<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>

<!-- Script sections -->


@yield('makeOrderScript')

</body>

</html>
