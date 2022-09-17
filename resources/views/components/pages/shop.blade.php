@extends('welcome')

@section('news')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Vida Sana</p>
                        <h1>Productos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".strawberry">Salud</li>
                            <li data-filter=".berry">Deporte</li>
                            <li data-filter=".lemon">Alimentos</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">

                @if(isset($products))

                    @foreach($products as $product)

                        @if($product->category->name == 'Salud')
                            <div class="col-lg-4 col-md-6 text-center strawberry">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="producto2.html">
                                            <img src="{{ asset('storage') .'/'. $product->image}}" alt="">
                                        </a>
                                    </div>
                                    <h3>{{$product->name}}</h3>
                                    <p class="product-price">
                                        <span>{{$product->description}}</span>
                                        {{$product->price}}
                                    </p>
                                    <a href="cart.html" class="cart-btn">
                                        <i class="fas fa-shopping-cart"></i>
                                        Añadir al carrito
                                    </a>
                                </div>
                            </div>
                        @endif

                        @if($product->category->name == 'Deporte')
                            <div class="col-lg-4 col-md-6 text-center berry">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="producto2.html">
                                            <img src="{{ asset('storage') .'/'. $product->image}}" alt="">
                                        </a>
                                    </div>
                                    <h3>{{$product->name}}</h3>
                                    <p class="product-price">
                                        <span>{{$product->description}}</span>
                                        {{$product->price}}
                                    </p>
                                    <a href="cart.html" class="cart-btn">
                                        <i class="fas fa-shopping-cart"></i>
                                        Añadir al carrito
                                    </a>
                                </div>
                            </div>
                        @endif

                        @if($product->category->name == 'Alimentos')
                            <div class="col-lg-4 col-md-6 text-center lemon">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="producto2.html">
                                            <img src="{{ asset('storage') .'/'. $product->image}}" alt="">
                                        </a>
                                    </div>
                                    <h3>{{$product->name}}</h3>
                                    <p class="product-price">
                                        <span>{{$product->description}}</span>
                                        {{$product->price}}
                                    </p>
                                    <a href="cart.html" class="cart-btn">
                                        <i class="fas fa-shopping-cart"></i>
                                        Añadir al carrito
                                    </a>
                                </div>
                            </div>
                        @endif

                    @endforeach

                @endif

            </div>
        </div>

    </div>
    <!-- end products -->
@endsection
