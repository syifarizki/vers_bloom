<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::count();
        $categories = Category::count();
        return view('dashboard.content.index', compact('products', 'categories'));
    }
    
}
