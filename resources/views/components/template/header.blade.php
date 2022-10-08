<!-- header -->
<div class="top-header-area" id="sticker">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-sm-12 text-center">

                <div class="main-menu-wrap">

                    <!-- logo -->
                    <div class="site-logo">
                        <a href="/">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">

                        <ul>

                            <li>
                                <a href="/">Inicio</a>
                            </li>

                            <li>
                                <a href="{{ url('/about') }} ">Nosotros</a>
                            </li>

                            <li>
                                <a href="{{ url('/news') }}">Blog</a>
                            </li>

                            <li>
                                <a href="{{ url('/shop') }}">Productos</a>
                            </li>

                            <li>
                                <a href="{{ url('/cart') }}">Carrito</a>
                            </li>

                            <li></li>

                        </ul>

                    </nav>

                    <a class="mobile-show search-bar-icon" href="#">
                        <i class="fas fa-search"></i>
                    </a>


                    <div class="mobile-menu"></div>
                    <!-- menu end -->

                </div>

            </div>

        </div>

    </div>

</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
