<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        

    return view('product', [
        "title" => "Shop All Product",
        "products" => Product::latest()->get()
    ]);
    }

    public function show(Product $product) {
        return view('detail', [
            "title" => "Detail Product",
            "product" => $product
        ]);
    }
}
