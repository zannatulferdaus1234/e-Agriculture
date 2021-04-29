<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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

    public function status($id, $status)
    {
        $category = Category::find($id);
        $category->status = $status;
        $category->save();
        return response()->json(['message' => 'success']);
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
