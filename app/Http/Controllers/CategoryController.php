<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('categories.index', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->back()->with(['success' => 'Categoria creata correttamente.']);
    }


    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->back()->with(['success' => 'Categoria modificata correttamente.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
      

        $category->delete();

        return redirect()->back()->with(['success' => 'Categoria cancellata correttamente.']);
    }
}