<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Dowload</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        @page {
            margin-left: 2.5rem;
            margin-right: 4.5rem;
        }
    </style>

</head>

<body>

<div class="container-fluid">

    <div class="container-fluid mt-3">
        <h4 style="font-weight: bolder;">RECIBO DE PAGO - Y2K</h4>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: bolder;">Modalidad de pago: <span style="font-weight: normal;">Los pagos se realizan mediante consignación bancaria.</span>
        </h5>
        <br>

        <h5 style="font-weight: bolder;">Entidad: <span style="font-weight: normal;">Bancolombia</span>
        </h5>
        <br>

        <h5 style="font-weight: bolder;">N° cuenta: <span
                style="font-weight: normal;">100738982423</span></h5>
        <br>

        <h5 style="font-weight: bolder;">Responsables: <span
                style="font-weight: normal;">Angelica, Michell & Juan.</span>
        </h5>
        <br>

    </div>

    <div class="container-fluid">

        <h5 class="mt-2" style="font-weight: bolder;">Listado de productos a comprar</h5>

        <table class="table table-striped mb-0 mt-3"
               style="width: 100%; border-style: solid; border-width: 2px; border-color: black">

            <thead class="text-center">
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Sub-Total</th>
            </tr>
            </thead>
            <tbody class="text-center">

            @foreach($products as $product)

                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>${{number_format( $product->price, 0, ',', '.')}}</td>
                    <td>{{$product->stockAmount}}</td>
                    <td>${{number_format(($product->price * $product->stockAmount) , 0, ',', '.')}}</td>
                </tr>

            @endforeach


        </table>

        <br>

        <h4 class="fw-bolder text-end">Total: ${{number_format($total, 0, ',', '.')}}</h4>

        <hr class="bg-dark">

        <div class="container-fluid mt-3">
            <P>Cualquier duda comunicarse al siguiente número: +57 3107156819</P>
        </div>

        <hr class="bg-dark">

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

</body>

</html>
