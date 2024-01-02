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
        "products" => Product::latest()->get()
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
        $products = Product::where('product_name', 'like', '%' . $query . '%')->get();

        return view('product', compact('products'));
    }
  
    public function SortBy(Request $request)
    {
        $sortBy = $request->get('sort_by', 'latest');
        
        if ($sortBy === 'price_low_high') {
            $products = Product::orderByRaw('CAST(price AS UNSIGNED) ASC')->get();
        } elseif ($sortBy === 'price_high_low') {
            $products = Product::orderByRaw('CAST(price AS UNSIGNED) DESC')->get();
        } else {
            $products = Product::latest()->get();
        }
    
        $categories = Category::all();
        return view('product', compact('products'));
    }
    
    


    public function showProducts(Request $request)
    {
        $categoryId = $request->input('category_id');
        $category = $categoryId ? Category::findOrFail($categoryId) : null;
      
        if ($categoryId) {
            $products = Product::where('category_id', $category->id)->get();
        } else {
            $products = Product::all();
        }
    
        $categories = Category::all();
    
        return view('product', compact('category', 'products', 'categories'));
    }
    
}


