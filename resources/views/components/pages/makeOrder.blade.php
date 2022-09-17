@extends('welcome')

@section('makeOrderStyles')
    <style>

        body {
            background: rgba(224, 221, 221, 0.5);
        }

        .custom-menu-section {
            margin-top: 3rem;
            margin-bottom: 4rem;
        }

        .btn-outline-dark:hover {
            background-color: black;
        }

        .btn-outline-dark.active {
            background-color: black;
        }

        .custom-product-selection-button {
            width: 80%;
            color: black;
            font-size: 17px;
            border-color: black;
            background-color: #ffffff00;
        }

        .custom-product-selection-button:hover {
            color: white;
            border-color: white;
            background-color: black;
        }

        .custom-product-selection-button:focus {
            width: 80%;
            color: black;
            font-size: 17px;
            border-color: black;
            background-color: #ffffff00;
            box-shadow: none;
        }

        .custom-product-selection-button:focus:hover {
            color: white;
            border-color: white;
            background-color: black;
            box-shadow: 0 0 15px #ffffff80;
        }

        @media (min-width: 768px) {
            .custom-menu-section {
                margin-top: 4rem;
                margin-bottom: 4rem;
            }
        }

        .custom-products-section {
            margin-top: 1rem;
        }

        .custom-carousel-item-content {
            display: flex;
            justify-content: center;
        }

        .custom-card {
            width: 15rem;
            margin: 0.3rem;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            background-color: #ffffff00;
        }

        .custom-card-body {
            text-align: center;
        }

        .custom-card-body h5 {
            color: #ffffff;
        }

        .custom-card-body h6 {
            color: #FFFFFFBF;
        }

        .custom-products-section {
            position: relative;
        }

        .custom-carousel-inner {
            padding: 1em;
        }

        .custom-carousel-control-prev,
        .custom-carousel-control-next {
            top: 50%;
            width: 7vh;
            height: 7vh;
            background-color: #000000;
            transform: translateY(-50%);
        }

        .custom-carousel-control-prev:hover,
        .custom-carousel-control-next:hover {
            background-color: black;
        }

        @media (min-width: 576px) {
            .custom-carousel-item {
                margin-right: 0;
                flex: 0 0 50%;
                display: block;
            }

            .custom-carousel-inner {
                display: flex;
            }
        }

        @media (min-width: 1200px) {
            .custom-carousel-item {
                margin-right: 0;
                flex: 0 0 33.33%;
                display: block;
            }

            .custom-carousel-inner {
                display: flex;
            }
        }
    </style>
@endsection

@section('makeOrder')
    <div class="container-fluid custom-menu-section">

        <div class="row">

            <div class="col-12 col-lg-7">

                <!-- Categorías de los productos  -->

                <div class="row" style="overflow-x: auto;">

                    <div class="btn-group">

                        @foreach(\App\Models\Category::all() as $category)

                            <a href="{{url('/makeOrder/' . $category->id)}}" class="btn btn-outline-dark
                              {{ request()->path() == 'makeOrder/' . $category->id ? 'active' : '' }}"
                               aria-current="page" style="font-size: 18px; white-space: nowrap;">
                                {{$category->name}}
                            </a>

                        @endforeach

                    </div>

                </div>

                <!-- Carrusel de los productos -->

                <div class="row custom-products-section">

                    <div id="carouselExampleControls" class="carousel" data-bs-ride="false">

                        <div class="carousel-inner custom-carousel-inner">

                            @foreach($products as $product)

                                <div
                                    class="carousel-item custom-carousel-item @if($product == $products[0]) active @endif">

                                    <div class="custom-carousel-item-content">

                                        <div class="card custom-card ">

                                            <img src="{{asset('storage').'/'.$product->image}}"
                                                 class="card-img-top" alt="Product">

                                            <div class="card-body custom-card-body">

                                                <h5 class="card-title text-dark fw-bolder">{{$product->name}}</h5>
                                                <h6 class="card-title text-dark fw-bolder">
                                                    $ {{number_format($product->price, 0, ',', '.')}}</h6>

                                                <!-- Button modal -->
                                                <button type="button" class="btn custom-product-selection-button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#productModal{{$product->id}}">
                                                    Seleccionar
                                                </button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- Product Modal -->

                                <div class="portfolio-modal modal fade mt-5" id="productModal{{$product->id}}"
                                     tabindex="-1"
                                     aria-labelledby="portfolioModal1"
                                     aria-hidden="true">

                                    <div class="modal-dialog modal-lg">

                                        <div class="modal-content bg-white">

                                            <div class="modal-body">

                                                <div class="container">

                                                    <div class="row">

                                                        <div class="col-12 col-md-6 mt-3 mb-3 rounded-3">
                                                            <img class="img-fluid"
                                                                 src="{{asset('storage').'/'.$product->image}}"
                                                                 alt="product"/>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <h1 class="text-center fw-bolder align-middle mt-3">{{$product->name}}</h1>
                                                            <h5 class="fw-bolder mt-4">Descripción:</h5>
                                                            <p>{{$product->description}}</p>
                                                            <h5 class="mt-4">Precio
                                                                unitario:&nbsp;<strong>$&nbsp;{{number_format($product->price, 0, ',', '.')}}</strong>
                                                            </h5>
                                                        </div>

                                                    </div>

                                                    <div class="row d-flex justify-content-center mt-3 mt-md-0">
                                                        <a href="{{url('/addProduct/' . $product->id)}}"
                                                           class="btn btn-warning w-50">Agregar</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                        <button class="carousel-control-prev custom-carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next custom-carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>

                </div>

            </div>

            <!-- Panel de pedido -->
            <div class="col-12 col-lg-5 text-center mt-4 mt-md-0">

                @if(session('errorMessage'))
                    <div class="alert alert-danger alert-dismissible fade show mt-2">
                        {{session('errorMessage')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('listOfProducts') == null || sizeof(session('listOfProducts')) == 0)

                    @if(session('productsBill') == null || session('totalBill') == null )

                        <img class="img-fluid img-thumbnail mt-5" src="{{asset('images/bannerOrder.jpg')}}" width="500"
                             alt="banner"/>

                        @if(session('errorMessageBill'))
                            <div class="alert alert-danger alert-dismissible fade show mt-2">
                                {{session('errorMessageBill')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                    @else
                        <form action="{{url('/downloadReceipt')}}" class="d-inline" method='post'>
                            @csrf
                            {{method_field('POST')}}
                            <input type='submit' value="Descargar Recibo" class="btn btn-warning">

                        </form>
                    @endif

                @else

                    <div class="card" style="background-color: black;">

                        <div class="card-header d-flex align-items-center justify-content-center">
                            <span class="text-white" style="font-size: 25px;">Tu pedido</span>
                        </div>

                        <ul class="list-group list-group-flush" style="overflow-y: auto; max-height: 13rem;">

                            <li class="list-group-item bg-white" style="margin-top: 1px">

                                <div class="row">

                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <span class="text-center text-black fs-6">Cantidad</span>
                                    </div>

                                    <div class="col-5 d-flex justify-content-center align-items-center">
                                        <span class="text-center text-black fs-6">Producto</span>
                                    </div>

                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <span class="text-center text-black fs-6">Precio</span>
                                    </div>

                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <span class="text-center text-black fs-6">Acción</span>
                                    </div>

                                </div>

                            </li>

                            <li class="list-group-item"
                                style="background-color: rgba(255,255,255,0.9); margin-top: 1px">

                                @foreach(session('listOfProducts') as $selectedProduct)

                                    <div class="row mb-2">

                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                                <span
                                                    class="text-center text-black fs-6">{{$selectedProduct->stockAmount}}</span>
                                        </div>

                                        <div class="col-5 d-flex justify-content-center align-items-center">
                                                <span
                                                    class="text-center text-black fs-6">{{$selectedProduct->name}}</span>
                                        </div>

                                        <div class="col-3 d-flex justify-content-center align-items-center">
                                            <span
                                                class="text-center text-black fs-6">$&nbsp;{{number_format(($selectedProduct->stockAmount * $selectedProduct->price), 0, ',', '.')}}</span>
                                        </div>

                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <form action="{{url('/removeProduct')}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <input type="hidden" name="indice" value="{{$loop->index}}">
                                                <button type="submit" class="btn btn-danger"
                                                        style="background-color: rgb(183,5,5); color: white">
                                                    <i class="fa-solid fa-trash"> </i>
                                                </button>
                                            </form>
                                        </div>

                                    </div>

                                @endforeach

                            </li>

                        </ul>

                        <div class="card-footer">

                            <div class="row">

                                <div class="col-6 d-flex">
                                    <span
                                        class="text-white fs-4">Total:&nbsp;${{number_format( $total, 0, ',', '.')}}
                                    </span>
                                </div>

                                <div class="col-6 d-flex justify-content-end" style="padding-right: 0.3rem;">

                                    <form action="{{url('/finalizeOrder')}}" class="d-inline" method='post'>
                                        @csrf
                                        {{method_field('POST')}}
                                        <input type='submit' onclick="return confirm('¿Desea finalizar la orden?')"
                                               value="Finalizar" class="btn btn-warning">
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                @endif

            </div>

        </div>

    </div>
@endsection

@section('makeOrderScript')
    <script>

        let multipleCardCarousel = document.querySelector("#carouselExampleControls");

        if (window.screen.width >= 576 || window.screen.width >= 1200) {

            new bootstrap.Carousel(multipleCardCarousel, {interval: false,});
            let carouselWidth = $(".carousel-inner")[0].scrollWidth;
            let cardWidth = $(".carousel-item").width();
            let scrollPosition = 0;

            $("#carouselExampleControls .carousel-control-next").on("click", function () {

                if (window.screen.width >= 576 && window.screen.width < 1200) {
                    if (scrollPosition < carouselWidth - cardWidth * 3) {
                        scrollPosition += cardWidth;
                        $("#carouselExampleControls .carousel-inner").animate({scrollLeft: scrollPosition}, 750);
                    }
                }

                if (window.screen.width >= 1200) {

                    $(multipleCardCarousel).removeClass("slide")

                    if (scrollPosition < carouselWidth - cardWidth * 4) {
                        scrollPosition += cardWidth;
                        $("#carouselExampleControls .carousel-inner").animate({scrollLeft: scrollPosition}, 600);
                    }
                }

            });

            $("#carouselExampleControls .carousel-control-prev").on("click", function () {

                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({scrollLeft: scrollPosition}, 600);
                }
            });

        } else if (window.screen.width < 576) {
            $(multipleCardCarousel).addClass("slide");
        }

    </script>

@endsection
