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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/arial-rounded-mt-bold" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center mx-auto mx-md-0" href="{{url('/')}}">
            <img src="{{ asset('favicon.ico') }}" alt="icon" height="40px">
            <strong class="ms-2 mx-auto">Y2K - Sogamoso</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto"></ul>

            <ul class="navbar-nav ms-auto">

                @guest

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" style="font-size: 16px;" href="{{ route('login') }}">Iniciar
                                sesión</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" style="font-size: 16px;" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main style="padding-top: 5rem;">
    @yield('content')
</main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
