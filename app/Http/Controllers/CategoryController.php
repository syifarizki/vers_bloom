<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $categories = $query
            ? Category::where('name', 'like', "%$query%")->get()
            : Category::all();
    
        return view('categories', [
            'categories' => $categories,
            'query' => $query,
        ]);
    }
    

    
    public function show(Category $category)
    {
        $totalProducts = $category->products()->count();
        
        return view('show', [
            'title' => 'Category Detail',
            'category' => $category,
            'products' => $category->products(),
            'totalProducts' => $totalProducts, // Menambahkan total jumlah produk
        ]);
    }
    
}
