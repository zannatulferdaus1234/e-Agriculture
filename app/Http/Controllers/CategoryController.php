<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        return view('admin.navbar.category.manage',compact('category'));
    }

    public function create()
    {
        return view('admin.navbar.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        Category::create(request()->validate([
            'name' => 'required|max:255',
        ]));

        return redirect(route('manage-category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.navbar.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category)
    {
        $category->update(request()->validate([
            'name'      => 'required|max:255',
        ]));

        return redirect(route('manage-category'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('manage-category'));
    }
}
