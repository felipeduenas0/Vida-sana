@extends('welcome')

@section('desintox')
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
                            <div class="single-artcile-bg desintox-bg"></div>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 02 Agosto, 2022</span>
                            </p>
                            <h2>Cómo desintoxicar el organismo?</h2>
                            <p>Antioxidantes: Estos antioxidantes pueden encontrarse, por ejemplo, en forma de vitamina
                                C en numerosas variedades de frutas, en el té verde, la pimienta negra o en ácidos
                                grasos omega-3, especialmente la astaxantina. Los antioxidantes aseguran que las células
                                del cuerpo y del cerebro estén protegidas y no sean atacadas por sustancias dañinas. Así
                                que los antioxidantes son la manera más natural de desintoxicar su cuerpo desde casa.

                                Según un estudio realizado en China, los antioxidantes ayudan a eliminar los compuestos
                                reactivos de oxígeno en el cuerpo¹. Estos compuestos de oxígeno se llaman radicales
                                libres y reaccionan con las células de su cuerpo, es decir, atacan sus células y las
                                hacen envejecer más rápido.
                            </p>
                            <p>Dieta adecuada: Otro consejo está dirigido a la desintoxicación interna del cuerpo.
                                Porque todo lo que comes afecta la salud de tu cuerpo. Muchas personas no son
                                conscientes de la cantidad de toxinas que agregan a su cuerpo todos los días. Hay un
                                gran número de alimentos que son beneficiosos para la salud de sus intestinos e incluso
                                pueden contener toxinas. En primer lugar, hay alimentos ricos en fibra, como los
                                productos integrales, las semillas de lino y las bayas frescas. Éstos contienen fibra
                                que se une a las toxinas en los intestinos y promueve la excreción.

                                Pero incluso los alimentos pequeños y discretos tienen un gran poder.</p>
                            <p>Destila toxinas: Uno de los métodos más relajados para desintoxicar el cuerpo es la
                                sauna. La sauna no sólo ayuda a reducir el estrés, sino que también desintoxica el
                                cuerpo de otras maneras. Por un lado, el calor estimula el metabolismo y fortalece el
                                sistema inmunológico. El calor tiene un efecto especialmente desintoxicante sobre la
                                piel. Cuando hace calor, tu cuerpo comienza a sudar para enfriarse. Esto causa una
                                pérdida de líquido, pero otras sustancias, como las toxinas, también se transportan a
                                través del sudor.

                                La temperatura corporal aumenta durante la sauna, lo que proporciona una circulación
                                sanguínea más fuerte de las células. Este aumento de la circulación sanguínea también es
                                útil para desintoxicar el cuerpo, ya que las toxinas se pueden eliminar más rápidamente.
                                El último efecto secundario positivo es que el calor y el sudor hacen que las capas
                                superiores de la piel se hinchen y que las células muertas sean transportadas. El sauna
                                es definitivamente un todoterreno y puede desintoxicar su cuerpo desde dentro y desde
                                fuera.</p>

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
                                <li><a href="{{ url('/fibras') }}">Función de las fibras digestivas.</a></li>
                                <li><a href="{{ url('/pnaturales') }}">Mitos y verdades de los productos naturales.</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a>Cuerpo</a></li>
                                <li><a>Cuidado</a></li>
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
