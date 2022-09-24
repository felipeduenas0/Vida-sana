<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class PagesController extends Controller
{

    public function start()
    {
        $data['products'] = Product::all();
        return view('components.pages.start', $data);
    }

    public function about()
    {
        return view('components.pages.about');
    }

    public function news()
    {
        return view('components.pages.news');
    }

    public function shop()
    {
        $data['products'] = Product::all();
        return view('components.pages.shop', $data);
    }

}
