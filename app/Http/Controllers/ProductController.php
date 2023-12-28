<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function index() {
        

    return view('product', [
        "title" => "Shop All Product",
        "products" => Product::latest()->paginate(10)
    ]);
    }

    public function show(Product $product) {
        return view('detail', [
            "title" => "Detail Product",
            "product" => $product
        ]);
    }

    
}


