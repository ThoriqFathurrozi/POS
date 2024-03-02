<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
}
