<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function product(){
        $data = Product::all();
        return view('.pages.product', ['products' => $data]);
    }
}
