@extends('welcome')

@section('product')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Mas detalles</p>
                        <h1>Producto individual</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{asset('storage').'/'.$product->image}}" alt="">
                    </div>
                </div>
                <div class="col-md-7 mt-5">
                    <div class="single-product-content">
                        <h3>{{$product->name}} {{$product->shortDescription}}</h3>
                        <p class="single-product-pricing">$ {{number_format($product->price, 0, ',', '.')}}</p>
                        <p>{{$product->description}}</p>
                        <P><b>Modo de uso:</b> {{$product->howToUse}}</P>
                        <div class="single-product-form">
                            <p><strong>Categoria: </strong>{{$product->category->name}}</p>
                            <a href="{{ url('/addProduct/'.$product->id) }}" class="cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                                Añadir al carrito
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->
@endsection
