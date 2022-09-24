<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{

    public function admin()
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

        /** @noinspection PhpUndefinedMethodInspection */
        Alert::success('Producto agregado correctamente');
        return redirect('admin');
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

        /** @noinspection PhpUndefinedMethodInspection */
        Alert::success('Producto actualizado correctamente');
        return redirect('admin');
    }

    public function destroy(Product $product)
    {
        if (Storage::delete('public/' . $product->getAttribute('image'))) {
            $product->delete();
        }

        /** @noinspection PhpUndefinedMethodInspection */
        Alert::success('Producto eliminado correctamente');
        return redirect('admin');
    }

    public function show(Product $product)
    {
        return view('components.pages.product', ['product' => $product]);
    }

}
