<h1 class="text-center mt-md-5 font-weight-bolder" style="font-family: 'Arial Rounded MT Bold', sans-serif">
    {{$mod}} Producto
</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" value="{{isset($product->name)?$product->name:old('name')}}">
</div>

<div class="form-group mt-3">
    <label for="shortDescription">Descripción corta</label>
    <input type="text" class="form-control" name="shortDescription"
           value="{{isset($product->shortDescription)?$product->shortDescription:old('shortDescription')}}">
</div>

<div class="form-group mt-3">
    <label for="description">Descripción</label>
    <input type="text" class="form-control" name="description"
           value="{{isset($product->description)?$product->description:old('description')}}">
</div>

<div class="form-group mt-3">
    <label for="howToUse">Modo de uso</label>
    <input type="text" class="form-control" name="howToUse"
           value="{{isset($product->howToUse)?$product->howToUse:old('howToUse')}}">
</div>

<div class="form-group mt-3">
    <label for="price">Precio</label>
    <input type="number" class="form-control" name="price"
           value="{{isset($product->price)?$product->price:old('price')}}">
</div>

<div class="form-group mt-3">
    <label for="stockAmount">Stock</label>
    <input type="number" class="form-control" name="stockAmount"
           value="{{isset($product->stockAmount)?$product->stockAmount:old('stockAmount')}}">
</div>

<div class="form-group mt-3">
    <label for="image">Imagen</label>
    @if(isset($product->image))
        <br>
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$product->image}}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="image">
</div>

<div class="form-group mt-3">
    <label for="category_id">Categoría</label>
    <select class="form-select form-control" name="category_id">
        @foreach(\App\Models\Category::all() as $item)

            @if(isset($product))
                <option
                    value="{{$item->id}}" {{$item->id == $product->category_id ? 'selected' : '' }}>{{$item->name}}</option>
            @else
                <option value="{{ $item->id }}">{{$item->name}}</option>
            @endif

        @endforeach
    </select>
</div>

<div class="mt-4 mb-5">
    <input type="submit" class="btn btn-success" value="{{$mod}} producto">
    <a class="btn btn-primary" href="{{url('admin')}}">Regresar</a>
</div>
