@extends('welcome')

@section('single-news')

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
                            <div class="single-artcile-bg fibras-bg"></div>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <h2>Función de las fibras digestivas</h2>
                            <p>Ayuda a mantener la salud intestinal: Una dieta alta en fibra puede reducir el riesgo de
                                desarrollar hemorroides y bolsas pequeñas en el colon (enfermedad diverticular). Los
                                estudios también han encontrado que una dieta alta en fibra probablemente disminuye el
                                riesgo de desarrollar cáncer colorrectal. Parte de la fibra se fermenta en el colon.</p>
                            <p>Ayuda a lograr un peso saludable: Los alimentos con alto contenido de fibra tienden a
                                llenar más que los alimentos con bajo contenido de fibra, por lo que es probable que
                                comas menos y te mantengas satisfecho por más tiempo.</p>
                            <p>Reduce los niveles de colesterol: La fibra soluble que se encuentra en los frijoles, la
                                avena, la linaza y el salvado de avena puede ayudar a reducir los niveles de colesterol
                                total en la sangre, pues disminuye los niveles de lipoproteína de baja densidad, o
                                colesterol "malo". Los estudios también han demostrado que los alimentos ricos en fibra
                                pueden tener otros beneficios para la salud del corazón, como la reducción de la presión
                                arterial y la inflamación.</p>
                            <p>Ayuda a controlar los niveles de azúcar en la sangre. En las personas con diabetes, la
                                fibra, particularmente la fibra soluble, puede retardar la absorción del azúcar y ayudar
                                a mejorar los niveles de azúcar en la sangre.</p>
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
                                <li><a href="{{ url('/single-news') }}">Hábitos de vida saludable para poner en
                                        práctica.</a>
                                </li>
                                <li><a href="{{ url('pnaturales') }}">Mitos y verdades de los productos naturales.</a>
                                </li>
                                <li><a href="{{ url('/desintox') }}">¿Cómo desintoxicar el organismo?</a></li>
                            </ul>
                        </div>

                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a>Digestión</a></li>
                                <li><a>Alimentación</a></li>
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
