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
</head>

<body>

<!-- NAVBAR -->
@include('components.navbar')

<section class="wallpaper w-Color-Two d-flex align-items-center">

    <div class="container">

        <div class="row">
            <h1 class="titles-section-start text-white fw-bolder">Conoce nuestra ubicación</h1>
        </div>

        <div class="row mt-4 mt-md-5">

            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center"
                 style="background: rgba(255,255,255,0.60)">

                <p class="text-ubication text-center text-black p-2 fs-5">
                    <span style="color: black; font-weight: bolder;">Y2K</span> es un espacio diferente, encontrarás
                    accesorios y prendas unicas tipo CYBER, manejamos productos de óptima
                    calidad, esperamos tu visita en la Carrera 12 N° 10-48 Sogamoso, Boyacá.
                </p>
            </div>

            <div class="col-12 col-md-8 d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.989270981667!2d-72.93158028573525!3d5.7146817336232045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a45db9125af57%3A0x97efdf9fdd1df806!2sCra.%2012%20%231048%2C%20Sogamoso%2C%20Boyac%C3%A1!5e0!3m2!1ses!2sco!4v1659489919696!5m2!1ses!2sco"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
@include('components.footer')

<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
