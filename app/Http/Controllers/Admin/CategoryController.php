<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        return view('admin.navbar.category.manage', compact('category'));
    }

    public function create()
    {
        return view('admin.navbar.category.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'name'  => 'required|max:50|unique:categories',
            'image' => 'required|image',
            'status' => '1',
        ]);
        $imagePath = request('image')->store('category-images', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 670);
        $image->save();

        Category::create([
            'name' => $attributes['name'],
            'image' => $imagePath,
        ]);

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
        return view('admin.navbar.category.edit', compact('category'));
    }



    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name'  => ['required', 'max:50', Rule::unique('sub_categories')->ignore($category)],
            'image' => 'image',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('category-images', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 670);
            $image->save();

            unlink(request('old_image'));
        }

        $category->update([
            'name' => $attributes['name'],
            'image' => $imagePath,
        ]);


        return redirect(route('manage-category'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        unlink('storage/' . $category->image);
        $category->delete();
        return redirect(route('manage-category'));
    }
}
