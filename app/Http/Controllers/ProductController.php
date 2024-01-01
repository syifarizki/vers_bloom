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
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('product_name', 'like', '%' . $query . '%')->paginate(10);

        return view('product', compact('products'));
    }
  
    public function SortBy(Request $request)
    {
        $sortBy = $request->get('sort_by', 'latest');
        if ($sortBy === 'price_low_high') {
            $products = Product::orderBy('price')->get();
        } elseif ($sortBy === 'price_high_low') {
            $products = Product::orderByDesc('price')->get();
        } else {
            $products = Product::latest()->get();
        }

        return view('product', compact('products'));
    }
    
}


