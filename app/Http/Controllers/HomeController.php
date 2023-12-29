<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{

    public function index(){
            $products = Product::latest()->paginate(4);
            return view('home', ['title' => 'Latest Products', 'products' => $products]);
        } 
            
    
    
}
