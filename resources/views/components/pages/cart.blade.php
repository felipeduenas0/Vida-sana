@extends('welcome')

@section('about')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>vida sana</p>
                        <h1>Carrito</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                @if(session('listOfProducts') == null || sizeof(session('listOfProducts')) == 0)

                    @if(session('productsBill') == null || session('totalBill') == null )

                        <div class="col-12">
                            <h1 class="text-center">
                                <i class="fas fa-shopping-cart"></i>
                                Carrito de compras vacío
                            </h1>
                        </div>
                    @else
                        <div class="container text-center">
                            <h3 class="text-center mb-5">La venta ha finalizado, por favor descargue su recibo...</h3>
                            <form action="{{url('/downloadReceipt')}}" class="d-inline mt-5" method='post'>
                                @csrf
                                {{method_field('POST')}}
                                <input type='submit' value="Descargar Recibo" class="boxed-btn text-white">
                            </form>
                        </div>
                    @endif

                @else
                    <div class="col-lg-8 col-md-12">
                        <div class="cart-table-wrap">
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Imagen</th>
                                    <th class="product-name">Nombre</th>
                                    <th class="product-price">Valor unitario</th>
                                    <th class="product-quantity">Cantidad</th>
                                    <th class="product-total">Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(session('listOfProducts') as $selectedProduct)

                                    <tr class="table-body-row">

                                        <td class="product-remove">
                                            <form action="{{url('/removeProduct')}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <input type="hidden" name="indice" value="{{$loop->index}}">
                                                <button type="submit" class="btn btn-info">
                                                    <i type="submit" class="far fa-window-close"></i>
                                                </button>
                                            </form>
                                        </td>

                                        <td class="product-image">
                                            <img src="{{ asset('storage') .'/'. $selectedProduct->image}}" alt="">
                                        </td>

                                        <td class="product-name">
                                            {{$selectedProduct->name}}
                                        </td>

                                        <td class="product-price">
                                            $ {{number_format($selectedProduct->price, 0, ',', '.')}}
                                        </td>

                                        <td class="product-quantity">
                                            {{$selectedProduct->stockAmount}}
                                        </td>

                                        <td class="product-total">
                                            $ {{number_format( ($selectedProduct->price * $selectedProduct->stockAmount), 0, ',', '.')}}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Venta</th>
                                    <th>Valor</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="total-data" style="height: 90px;">
                                    <td><strong>IVA: </strong></td>
                                    <td>$ 0</td>
                                </tr>
                                <tr class="total-data" style="height: 90px;">
                                    <td><strong>Total: </strong></td>
                                    <td>$ {{number_format($total, 0, ',', '.')}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="cart-buttons text-center">


                                <form action="{{url('/finalizeOrder')}}" class="d-inline" method='post'>
                                    @csrf
                                    {{method_field('POST')}}

                                    <input
                                        class="boxed-btn text-white" type='submit' style="font-size: 12px;"
                                        onclick="return confirm('¿Desea finalizar la orden?')" value="Finalizar venta">
                                </form>

                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
    <!-- end cart -->
@endsection
