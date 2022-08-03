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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboardStyles.css') }}" rel="stylesheet">

</head>

<body id="body" class="body_move">

<div id="app">

    <header>

        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="user__navbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('start') }}">
                            <i class="fa-regular fa-file-lines"></i> Página principal
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>

                </li>

            </ul>

        </div>

    </header>

    <div class="menu__side menu__side_move" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-star"></i>
            <span>Y2K&nbsp;Sogamoso</span>
        </div>

        <div class="container" style="margin-left: 10px;">
            <div style="width: auto; border-style: solid; border-top: 2px; border-color: rgba(255,255,255,0.7);"></div>
        </div>

        <div class="options__menu">

            <!-- Admin -->

            <a href="{{ route('product/management') }}"
               class="{{request()->routeIs('product/management') ? 'selected' : ''}}">
                <div class="option">
                    <i class="fa-solid fa-shirt"></i>
                    <span>Gestión&nbsp;productos</span>
                </div>
            </a>

        </div>

    </div>

    <main class="py-4">
        @yield('content')
    </main>

</div>

<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/dashboardScript.js')}}"></script>

</body>
</html>
