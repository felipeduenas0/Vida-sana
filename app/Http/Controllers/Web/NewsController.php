<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function singleNews()
    {
        return view('components.blogs.single-news');
    }

    public function fibras()
    {
        return view('components.blogs.fibras');
    }

    public function pNaturales()
    {
        return view('components.blogs.pnaturales');
    }

    public function desintox()
    {
        return view('components.blogs.desintox');
    }

}
