<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $product = $query
        ? Product::where('product_name', 'like', "%$query%")->get()
        : Product::all();
        return view('dashboard.posts.index', [
            'query' => $query,
            'products' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function cetakProduk()
    {
        return view('dashboard.cetak', [
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'common_name' => 'required|max:255',
            'code' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required|max:255',
            'image'=> 'image|file|max:1024',
            'description' => 'required'
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $path = 'img/' . $imageName;
            $validatedData['image'] = $path;
        }
        Product::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New product has been added!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($code)
    {
        $product = Product::where('id', $code)->first();
        return view('dashboard.posts.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.posts.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'common_name' => 'required|max:255',
            'code' => 'required|unique:products,code,' . $product->id,
            'category_id' => 'required',
            'price' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $path = 'img/' . $imageName;
            $validatedData['image'] = $path;
        }

        $product->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Product has been updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Product::destroy($product->id);

        return redirect('/dashboard/posts')->with('success', 'Product has been deleted!!');
    }
    public function SortByProduct(Request $request)
    {
        $sortBy = $request->get('sort_by', 'latest');
        if ($sortBy === 'price_low_high') {
            $products = Product::orderBy('price')->get();
        } elseif ($sortBy === 'price_high_low') {
            $products = Product::orderByDesc('price')->get();
        } else {
            $products = Product::latest()->get();
        }
        $categories = Category::all();
        return view('dashboard.posts.index', compact('products','categories'));
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
    
        return view('dashboard.posts.index', compact('category', 'products', 'categories'));
    }

}

