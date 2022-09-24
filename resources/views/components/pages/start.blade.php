@extends('welcome')

@section('start')
    <!-- home page slider -->
    <div class="homepage-slider">
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Bienvenidos</p>
                                <h1>Tienda Naturista Vida Sana</h1>
                                <div class="hero-btns">
                                    <a href="{{ url('/about') }}" class="bordered-btn">Conócenos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Alimentación deportiva</p>
                                <h1>Cuida tu salud y tu forma física</h1>
                                <div class="hero-btns">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->

    </div>

    <!-- end home page slider -->
    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Envíos a todo el país</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>Compra segura</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-money-bill-alt"></i>
                        </div>
                        <div class="content">
                            <h3>Buenos precios</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->
    <!-- productos destacados -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Productos </span>Destacados</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @for($i=0; $i<3; $i++)
                    @if($i < sizeof($products))
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="single-product-item">
                                <div class="product-image">

                                    <a href="{{ url('/product/' . $products[$i]['id']) }}">
                                        <img src="{{ asset('storage') .'/'. $products[$i]['image'] }}" alt="">
                                    </a>

                                </div>
                                <h3>{{ $products[$i]['name'] }}</h3>
                                <p class="product-price">
                                    <span>{{ $products[$i]['shortDescription'] }}</span>
                                    $ {{   number_format($products[$i]['price'], 0, ',', '.')}}
                                </p>
                                <a href="{{ url('/addProduct/'.$products[$i]['id']  ) }}" class="cart-btn">
                                    <i class="fas fa-shopping-cart"></i>
                                    Añadir al carrito
                                </a>
                            </div>
                        </div>
                    @endif
                @endfor

            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- cart banner section -->
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>Compra</strong> <br> ahora!
                                </span>
                            </div>
                        </div>
                        <img src="{{ asset('img/a.jpg') }}" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">

                    <div class="container" style="margin-top: 5rem;">
                        <h3><span class="orange-text">Producto </span>del mes</h3>
                        <h4>BEBIDA DE ALMENDRAS</h4>
                        <div class="text">Es una alternativa nutritiva, contiene vitaminas, calcio y proteínas. No eleva
                            el
                            azúcar en la sangre y es libre de lácteos, así ayuda a reducir riesgos en la salud,
                            adicionándola a una dieta saludable.<br>Anímate a probarla y conocer sus diferentes usos.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ asset('img/avaters/avatar1.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Testimonios <span>Juana Ramirez</span></h3>
                                <p class="testimonial-body">
                                    “Estoy encantada con la calidad de los productos y la rapidez del servicio”.
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ asset('img/avaters/avatar2.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Testimonios<span>Victor Arenas</span></h3>
                                <p class="testimonial-body">
                                    "Buena atención al cliente, recomiendo esta tienda"
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ asset('img/avaters/avatar3.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Testimonios<span>José Rodríguez</span></h3>
                                <p class="testimonial-body">
                                    "No tuve ningún inconveniente con la compra, seguire siendo su cliente"
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->
    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <img src="{{ asset('img/pnatu.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <h2>¿Por qué <span class="orange-text">productos naturales?</span></h2>
                        <p>Ofrecen la tranquilidad de evitar sustancias tóxicas o dañinas en la alimentación o el
                            cuidado personal. Existen alternativas que también permiten una cantidad innumerable de
                            usos, siendo más amigables al organismo sin producir efectos negativos. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->
    <!-- encuesta -->
    <section class="shop-banner">
        <div class="container">
            <h3>Tu opinión es <span class="orange-text">importante!</span></h3><br>
            <iframe style="border: 0" id="iframeX6D3A1V8A8F1F9Y6J"
                    src="https://www.survio.com/survey/i/W2F6A7U8L7F9U3A6C"
                    height="600" width="800">
            </iframe>
        </div>
    </section>
    <!-- end encuesta -->

    <!-- blog -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Nuestro</span> Blog</h3>
                        <p>Conoce este canal de información útil.</p>
                    </div>
                </div>
            </div>

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
                                <span class="date"><i class="fas fa-calendar"></i> 02 agosto, 2022</span>
                            </p>
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

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
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

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ url('/news') }}" class="boxed-btn">Visitar blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->

@endsection
