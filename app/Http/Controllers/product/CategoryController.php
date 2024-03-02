<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category($name)
    {
        return view('product.category')->with('name', $name);
    }
}
