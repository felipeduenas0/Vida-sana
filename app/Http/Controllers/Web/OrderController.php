<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{

    public function cart()
    {
        return view('components.pages.cart', ['total' => $this->getTotal()]);
    }

    private function getTotal()
    {
        $total = 0;

        foreach ($this->getListProducts() as $item) {
            $total = $total + ($item->stockAmount * $item->price);
        }

        return $total;
    }

    public function addProduct(Product $product): RedirectResponse
    {
        $result = $this->validateStock($product);

        if (!$result) {
            /** @noinspection PhpUndefinedMethodInspection */
            Alert::error('No hay más unidades de este producto');
            return redirect()->route('cart');
        }

        return $this->addToTheList($product);
    }

    private function validateStock(Product $product): bool
    {
        return ($product->getAttribute('stockAmount') - 1) >= 0;
    }

    private function addToTheList(Product $product): RedirectResponse
    {
        $listOfProducts = $this->getListProducts();

        foreach ($listOfProducts as $item) {
            if ($item->id == $product->getAttribute('id')) {

                if (($item->stockAmount + 1) > $product->getAttribute('stockAmount')) {
                    /** @noinspection PhpUndefinedMethodInspection */
                    Alert::error('No hay más unidades de este producto');
                    return redirect()->route('cart');
                }

                $item->stockAmount = ($item->stockAmount + 1);

                return redirect()->route('cart');
            }
        }

        $item = $product;
        $item->setAttribute('stockAmount', 1);

        array_push($listOfProducts, $product);
        $this->saveProducts($listOfProducts);

        return redirect()->route('cart');
    }

    private function getListProducts()
    {
        $listOfProducts = session('listOfProducts');
        if (!$listOfProducts) {
            $listOfProducts = [];
        }
        return $listOfProducts;
    }

    private function saveProducts($listOfProducts)
    {
        session(['listOfProducts' => $listOfProducts]);
    }

    public function removeProduct(Request $request): RedirectResponse
    {
        $index = $request->get('indice');
        $listOfProducts = $this->getListProducts();

        if ($listOfProducts[$index]['stockAmount'] > 1) {
            $listOfProducts[$index]['stockAmount'] = ($listOfProducts[$index]['stockAmount'] - 1);
            return redirect()->route('cart');
        }

        array_splice($listOfProducts, $index, 1);
        $this->saveProducts($listOfProducts);
        return redirect()->route('cart');
    }

    public function finalizeOrder(): RedirectResponse
    {
        $products = $this->getListProducts();

        foreach ($products as $product) {
            $updatedProduct = Product::all()->find($product->getAttribute('id'));
            $updatedProduct->setAttribute('stockAmount', ($updatedProduct->getAttribute('stockAmount') - $product->getAttribute('stockAmount')));
            $updatedProduct->save();
        }

        session([
            'productsBill' => $this->getListProducts(),
            'totalBill' => $this->getTotal()
        ]);

        $this->emptyProductList();

        return redirect()->route('cart');
    }

    private function emptyProductList()
    {
        $this->saveProducts(null);
    }

    public function downloadReceipt()
    {
        if (session('productsBill') == null || session('totalBill') == null) {
            /** @noinspection PhpUndefinedMethodInspection */
            Alert::error('El recibo ya ha caducado');
            return redirect()->route('cart');
        }

        $pdf = Pdf::loadView('components.download.bill', [
            'products' => session('productsBill'),
            'total' => session('totalBill')
        ]);

        session([
                'productsBill' => null,
                'totalBill' => null]
        );

        $pdf->setPaper('A3');
        return $pdf->download('Recibo_Pago' . '.pdf');
    }

}
