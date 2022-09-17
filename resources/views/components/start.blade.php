@extends('welcome')

@section('startStyles')

    <style>

        .custom-carousel-control-prev,
        .custom-carousel-control-next {
            top: 50%;
            width: 7vh;
            height: 7vh;
            background-color: #e1e1e1;
            transform: translateY(-50%);
        }

        .custom-carousel-control-prev:hover,
        .custom-carousel-control-next:hover {
            background-color: #eea520;
        }

        .titles-section-start {
            font-family: "Arial Rounded MT Bold", sans-serif;
        }

        .custom-form:focus {
            box-shadow: 0 0 15px rgba(255, 255, 255, 0);
            border-color: black;
        }

        @media (max-width: 768px) {
            .text-ubication {
                display: none;
            }

            .text-home-parraf {
                display: none;
            }

        }

        @media (min-width: 768px) {
            .text-home {
                display: none;
            }

        }

    </style>

@endsection

@section('start')

    <section class="wallpaper w-Color-One d-flex align-items-center" id="home">

        <div class="container custom-start-section">

            <div class="row">

                <div class="col-12 col-md-8">

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="{{asset('images/c1.jpg ')}}" class="d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="{{asset('images/c2.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="{{asset('images/c3.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <img src="{{asset('images/c4.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev custom-carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next custom-carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div
                    class="col-12 col-md-4 mt-5 mt-md-0 d-flex justify-content-center align-items-center"
                    style="background: rgba(0,0,0,0.80)">

                    <span class="text-home text-white text-center pd-2 fs-4">
                         Y2K FASHION...
                    </span>

                    <p class="text-home-parraf text-white text-center p-2" style="font-size: 17px;">
                        Venta de accesorios y ropa tipo CYBER Y2K. Te ofrecemos lo mejor en calidad y moda. Puedes
                        adquirir todos nuestros productos de manera fácil y ágil por medio de este sitio o puedes
                        comunicarte con nosotros por medio de nuestras redes sociales. Te esperamos.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="wallpaper w-Color-Three d-flex align-items-center" id="contact">

        <div class="container-fluid">

            <div class="col-11 col-md-5 mx-auto" style="border-style: solid; border-width: 2px; border-color: rgba(255,255,255,0);
            background: rgba(0,0,0,0.80)">

                <div class="col-12 mx-auto">
                    <h1 class="text-center mt-4 titles-section-start text-white">Envíanos un mensaje</h1>
                </div>

                <div class="col-11 mt-5 mx-auto">

                    <form action="{{url('/sendMessage')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        @if(count($errors)>0)

                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group mb-4">
                            <label class="text-white fs-5 mb-2 w-100" for="name">Nombre
                                <input type="text" class="form-control custom-form" name="name">
                            </label>
                        </div>

                        <div class="form-group mb-4">
                            <label class="text-white fs-5 mb-2 w-100" for="email">Correo
                                <input type="email" class="form-control custom-form" name="email">
                            </label>
                        </div>

                        <div class="form-group mb-4">
                            <label class="text-white fs-5 mb-2 w-100" for="message">Mensaje
                                <textarea type="text" class="form-control custom-form" name="message"
                                          style="height: 7rem; min-height: 7rem; max-height: 7rem;">
                                </textarea>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning btn-block mb-4 custom-main-button">Enviar
                            </button>
                        </div>

                    </form>

                    @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show mt-2">
                            {{session('message')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                </div>

            </div>

        </div>

    </section>

@endsection
