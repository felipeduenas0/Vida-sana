@extends('welcome')

@section('news')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Sección informativa</p>
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ url('/single-news') }}">
                            <div class="latest-news-bg news-bg-1"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ url('/single-news') }}">Hábitos de vida saludable para poner en
                                    práctica.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <p class="excerpt">Son todas aquellas acciones de tu día a día que te ayudan a estar bien,
                                llevarlas a cabo por un periodo de mediano a largo...</p>
                            <a href="{{ url('/single-news') }}" class="read-more-btn">Leer más <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ url('/fibras') }}">
                            <div class="latest-news-bg news-bg-2"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ url('/fibras') }}">Función de las fibras digestivas.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <p class="excerpt">Ayuda a mantener la salud intestinal: Una dieta alta en fibra puede
                                reducir el riesgo de desarrollar hemorroides y bolsas...</p>
                            <a href="{{ url('/fibras') }}" class="read-more-btn">Leer más <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ url('/pnaturales') }}">
                            <div class="latest-news-bg news-bg-3"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ url('/pnaturales') }}">Mitos y verdades de los productos naturales.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <p class="excerpt">Los productos naturales son el complemento ideal de otros tratamientos:
                                VERDADERO. Porque muchos de ellos funcionan...</p>
                            <a href="{{ url('/pnaturales') }}" class="read-more-btn">Leer más <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ url('/desintox') }}">
                            <div class="latest-news-bg news-bg-4"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ url('/desintox') }}">¿Cómo desintoxicar el organismo?</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <p class="excerpt">Antioxidantes: Estos antioxidantes pueden encontrarse, por ejemplo, en
                                forma de vitamina C en numerosas variedades de...</p>
                            <a href="{{ url('/desintox') }}" class="read-more-btn">Leer más<i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->
@endsection
