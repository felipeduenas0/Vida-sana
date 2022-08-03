<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['products'] = Product::all();
        return view('components.product.index', $data);
    }

    public function create()
    {
        return view('components.product.create');
    }

    public function store(ProductRequest $request)
    {
        $data = request()->except('_token');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        $product = new Product($data);
        $product->save();

        return redirect('product/management')->with('message', 'Producto agregado correctamente');
    }

    public function edit(Product $product)
    {
        return view('components.product.edit', compact('product'));
    }

    public function update(Product $product, ProductUpdateRequest $request)
    {
        $data = request()->except(['_token', '_method']);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $product->getAttribute('image'));
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        $product->update($data);
        $product->save();

        return redirect('product/management')->with('message', 'Producto actualizado correctamente');
    }

    public function destroy(Product $product)
    {
        if (Storage::delete('public/' . $product->getAttribute('image'))) {
            $product->delete();
        }

        return redirect('product/management')->with('message', 'Producto eliminado correctamente');
    }

}
