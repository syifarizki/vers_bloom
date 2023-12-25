<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function index() {
    return view('product', [
        "title" => "SHOP ALL PLANTS",
        // "product" => Product::all()
        "product" => Product::latest()->get()
    ]);
   }

   public function show(Product $detail) {
    return view('detail', [
        "title" => "Detail Product",
        "detail" => $detail
    ]);
   } 
}
