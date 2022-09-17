@extends('welcome')

@section('about')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Vida Sana</p>
                        <h1>Nosotros</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- contacto section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3">Sobre <span class="orange-text">Nosotros</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Vida Sana</h3>
                                        <p>Nos dedicamos a la venta de productos naturales y deportivos para incentivar
                                            al público a conocer los beneficios de las alternativas saludables y sacar
                                            provecho de ellas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Contacto</h3>
                                        <p>Claudia Arguello<br><b>Email:</b> vidasana832@gmail.com <br> <b>Teléfono:</b>
                                            <a href="https://wa.pe/vidasana" target="_blank"> 3053777727</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Redes sociales</h3>
                                        <p><a href="https://www.instagram.com/tiendan_vidasana/" target="_blank"><i
                                                    class="fab fa-instagram"></i> tiendan_vidasana</a><br><a
                                                href="https://www.facebook.com/profile.php?id=100085936891712"
                                                target="_blank"><i class="fab fa-facebook-f"></i> Vida Sana</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Tienda</h3>
                                        <p>Elegimos productos de buena calidad para ti, conoce un poco más sobre
                                            nuestros servicios.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->
    <!-- propositos -->
    <div class="mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>Nuestro <span class="orange-text">Propósito</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                    <iframe loading="lazy"
                            style="position: absolute; width: 100%; height: 90%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                            src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFKP9oojFA&#x2F;view?embed"
                            allowfullscreen="allowfullscreen" allow="fullscreen">
                    </iframe>
                </div>
                <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFKP9oojFA&#x2F;view?utm_content=DAFKP9oojFA&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link"
                   target="_blank" rel="noopener"></a>
            </div>
        </div>
    </div>
    <!-- end propositos -->
    <!-- buzon -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Buzón de sugerencias</h2>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                                <input type="text" placeholder="Subject" name="subject" id="subject">
                            </p>
                            <p><textarea name="message" id="message" cols="30" rows="10"
                                         placeholder="Message"></textarea></p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw"/>
                            <p><input type="submit" value="Enviar"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Aquí podrás...</h4>
                            <p>Contactarnos para alguna consulta o simplemente para dejar un comentario. Escribenos en
                                el siguiente formulario.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contacto -->
@endsection
