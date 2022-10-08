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
                            <div class="single-artcile-bg h-saludable-bg"></div>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <h2>Hábitos de vida saludable para poner en práctica</h2>
                            <p>Son todas aquellas acciones de tu día a día que te ayudan a estar bien, llevarlas a cabo
                                por
                                un periodo de mediano a largo plazo, generan efectos positivos sobre nuestra salud
                                mental,
                                física, nutricional y social.</p>
                            <p>1. Dieta saludable: La primera clave es una alimentación variada y equilibrada. Resalta
                                la
                                importancia de las frutas, verduras, cereales integrales, proteínas como mariscos, carne,
                                huevo, nueces y semillas. También debemos conocer el contenido de nutrientes de los
                                alimentos para analizar si la dieta es adecuada, estos son: Hidratos de carbono,
                                lípidos,
                                vitaminas y minerales.</p>
                            <p>2. Calidad de sueño: Hay que dormir bien para que el sueño sea realmente reparador y
                                puedas
                                levantarte descansado. Cada persona necesita un tiempo determinado de sueño, pero lo
                                normal
                                es que éste se prolongue entre 6 y 8 horas. al finalizar el día hay que iniciar una
                                serie de
                                rutinas que ayuden a que el sueño sobrevenga en el momento deseado. Es bueno relajarse y
                                utilizar una iluminación lo más tenue posible para que empiece a producirse la
                                melatonina.</p>
                            <p>3. Actividad física: Entre las más comunes cabe mencionar caminar, montar en bicicleta,
                                pedalear, practicar deportes, participar en actividades recreativas y juegos; todas
                                ellas se
                                pueden realizar con cualquier nivel de capacidad y para disfrute de todos. Se ha
                                demostrado
                                que la actividad física regular ayuda a prevenir y controlar las enfermedades no
                                transmisibles, como las enfermedades cardíacas, los accidentes cerebrovasculares, la
                                diabetes y varios tipos de cáncer. También ayuda a prevenir la hipertensión, a mantener
                                un
                                peso corporal saludable y puede mejorar la salud mental, la calidad de vida y el
                                bienestar.</p>
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
                                <li><a href="{{ url('/fibras') }}">Función de las fibras digestivas.</a></li>
                                <li><a href="{{ url('/pnaturales') }}">Mitos y verdades de los productos naturales.</a>
                                </li>
                                <li><a href="{{ url('/desintox') }}">¿Cómo desintoxicar el organismo?</a></li>
                            </ul>
                        </div>
                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a>Salud</a></li>
                                <li><a>Alimentación</a></li>
                                <li><a>Ejercicio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->
@endsection
