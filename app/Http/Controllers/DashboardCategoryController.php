<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $categories = $query
        ? Category::where('name', 'like', "%$query%")->get()
        : Category::all();
        return view('dashboard.categories.index', [
            'categories' => $categories,
            'query' => $query,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|unique:categories'
        ]);

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'New category has been added!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
        ]);

        $category->update($request->only(['name','code']));

        return redirect('/dashboard/categories')->with('success', 'Behasil Update Katgeori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with('success', 'Category has been deleted!!');
    }
    public function SortCategory(Request $request)
    {
        $sortBy = $request->get('sort_by', 'latest');
        if ($sortBy === 'asc') {
            $categories = Category::orderBy("name")->get();
        } elseif ($sortBy === 'desc') {
            $categories = Category::orderByDesc("name")->get();
        } else {
            $categories = Category::latest()->get();
        }
        return view('dashboard.categories.index', compact('categories'));
    }
}
