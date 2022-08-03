<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{

    public function getMakeOrder(Category $category)
    {
        $products = $category->product()->get();
        return view("components.makeOrder", ['products' => $products, 'total' => $this->getTotal()]);
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
        $category = $product->getAttribute('category_id');
        $result = $this->validateStock($product);

        if (!$result) {
            return redirect()->route('makeOrder', $category)->with('errorMessage', 'No hay más unidades de este producto');
        }

        return $this->addToTheList($product);
    }

    private function validateStock(Product $product): bool
    {
        return ($product->getAttribute('stockAmount') - 1) >= 0;
    }

    private function addToTheList(Product $product): RedirectResponse
    {
        $category = $product->getAttribute('category_id');
        $listOfProducts = $this->getListProducts();

        foreach ($listOfProducts as $item) {
            if ($item->id == $product->getAttribute('id')) {

                if (($item->stockAmount + 1) > $product->getAttribute('stockAmount')) {
                    return redirect()->route('makeOrder', $category)->with('errorMessage', 'No hay más unidades de este producto');
                }

                $item->stockAmount = ($item->stockAmount + 1);

                return redirect()->route('makeOrder', $category);
            }
        }

        $item = $product;
        $item->setAttribute('stockAmount', 1);

        array_push($listOfProducts, $product);
        $this->saveProducts($listOfProducts);

        return redirect()->route('makeOrder', $category);
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
            return redirect()->route('makeOrder', 1);
        }

        array_splice($listOfProducts, $index, 1);
        $this->saveProducts($listOfProducts);
        return redirect()->route('makeOrder', 1);
    }

    public function finalizeOrder(): RedirectResponse
    {
        session([
            'productsBill' => $this->getListProducts(),
            'totalBill' => $this->getTotal()
        ]);

        $this->emptyProductList();

        return redirect()->route('makeOrder', 1);
    }

    private function emptyProductList()
    {
        $this->saveProducts(null);
    }

    public function downloadReceipt()
    {
        if (session('productsBill') == null || session('totalBill') == null) {

            return redirect()->route('makeOrder', 1)->with('errorMessageBill', 'El recibo ya caduco...');
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
