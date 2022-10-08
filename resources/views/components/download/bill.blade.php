<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Descarga</title>

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
        <h4 style="font-weight: bolder;">RECIBO DE PAGO</h4>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: bolder;">Responsable directo: <span
                style="font-weight: normal;">VIDA SANA</span>
        </h5>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: bolder;">-Cuenta de ahorros Bancolombia: <span
                style="font-weight: normal;">35819350343</span>
        </h5>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: bolder;">-Nequi: <span
                style="font-weight: normal;">3223295825</span>
        </h5>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: bolder;">-Efecty: <span
                style="font-weight: normal;">C.C. 46384714 Claudia Arguello (Usted debe asumir el costo adicional)</span>
        </h5>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: normal">
            Por favor envíe el comprobante de pago al siguiente Whatsapp: 3123303761 junto con sus datos de envío, de lo
            contrario su pedido no será despachado. Debe pagar el envío al recibir el pedido.
            Recomendamos revisar las políticas de envío alojadas en el pie de página.
        </h5>
        <br>
    </div>

    <div class="container-fluid mt-3">
        <h5 style="font-weight: bolder;">DATOS: <span
                style="font-weight: normal;">Nombre, cédula de ciudadanía, número de teléfono, ciudad y departamento, dirección completa.</span>
        </h5>
        <br>
    </div>

    <div class="container-fluid">

        <h5 class="mt-2" style="font-weight: bolder;">Lista de productos adquiridos</h5>

        <table class="table table-striped mb-0 mt-3"
               style="width: 100%; border-style: solid; border-width: 2px; border-color: #68aca4">

            <thead class="text-center">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Sub-Total</th>
            </tr>
            </thead>
            <tbody class="text-center">

            @foreach($products as $product)

                <tr>
                    <td>{{$product->name}}</td>
                    <td>${{number_format( $product->price, 0, ',', '.')}}</td>
                    <td>{{$product->stockAmount}}</td>
                    <td>${{number_format(($product->price * $product->stockAmount) , 0, ',', '.')}}</td>
                </tr>

            @endforeach

        </table>

        <br>

        <h4 class="fw-bolder text-end">Total: ${{number_format($total, 0, ',', '.')}}</h4>
        <hr class="bg-info">
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
