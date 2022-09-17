@extends('welcome')

@section('pnaturales')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Detalles</p>
                        <h1>Lectura</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single article section -->
    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <div class="single-artcile-bg"></div>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <h2>Mitos y verdades de los productos naturales</h2>
                            <p>Los productos naturales son el complemento ideal de otros tratamientos: VERDADERO. Porque
                                muchos de ellos funcionan perfectamente para complementar tratamientos agresivos. Así
                                como también para mejorar síntomas leves como los de una gripa y mejorar
                                considerablemente esos efectos severos de cualquier tratamiento que esté reduciendo la
                                calidad de vida del paciente.
                            </p>
                            <p>Tienen efectos secundarios: esto es FALSO, porque básicamente estos productos están
                                elaborados a partir de ingredientes extraídos de la naturaleza. En caso de padecer algún
                                efecto secundario, realmente sería mínimo y pasajero.</p>
                            <p>Calman algunos síntomas sin necesidad de acudir a la medicina convencional: VERDADERO.
                                Por ejemplo, los problemas de ansiedad y de estrés, unas de las enfermedades más comunes
                                en la sociedad actual. En muchos casos para tratar estos problemas se debe acudir al
                                psicólogo, pero si se complementan con un producto natural como las esencias florales,
                                los episodios de estrés pueden mejorar considerablemente.</p>
                            <p>Surten efecto de forma inmediata: FALSO. Tal y como te lo hemos comentado anteriormente,
                                este tipo de productos se concentran en el origen del problema y no en el síntoma. Por
                                lo tanto, es normal que notes que el síntoma tarde más en desaparecer, pero esto no
                                quiere decir que el producto no esté funcionando.</p>
                        </div>

                        <div class="comments-list-wrap">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-section">
                        <div class="recent-posts">
                            <h4>Otras publicaciones</h4>
                            <ul>
                                <li>
                                    <a href="{{ url('single-news') }}">Hábitos de vida saludable para poner en
                                        práctica.</a>
                                </li>
                                <li><a href="{{ url('fibras') }}">Función de las fibras digestivas.</a></li>
                                <li><a href="{{ url('/desintox') }}">¿Cómo desintoxicar el organismo?</a></li>
                            </ul>
                        </div>

                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a>Naturista</a></li>
                                <li><a>Medicina</a></li>
                                <li><a>Salud</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->
@endsection
