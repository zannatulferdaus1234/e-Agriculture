<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;


class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_category = SubCategory::latest()->get();
        return view('admin.navbar.sub_category.manage', compact('sub_category'));
    }

    public function create()
    {
        $category = Category::get();
        return view('admin.navbar.sub_category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'category_id'         => 'required',
            'name'                => 'required|max:50|unique:sub_categories',
            'image'               => 'required|image',
        ]);


        $imagePath = request('image')->store('sub_category-images', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 670);
        $image->save();

        SubCategory::create([
            'category_id' => $attributes['category_id'],
            'name' => $attributes['name'],
            'image' => $imagePath,
        ]);

        return redirect(route('manage-sub_category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $sub_category)
    {
        $category = Category::get();
        return view('admin.navbar.sub_category.edit', compact('sub_category', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategory $sub_category)
    {
        $attributes = request()->validate([
            'name'  => ['required', 'max:50', Rule::unique('sub_categories')->ignore($sub_category)],
            'image' => 'image',

        ]);
        if (request('image')) {
            $imagePath = request('image')->store('sub_category-images', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 700);
            $image->save();
            unlink(request('old_image'));
        }
        $sub_category->update([
            'name' => $attributes['name'],
            'image' => $imagePath,

        ]);

        return redirect(route('manage-sub_category'));
    }


    public function destroy(SubCategory $sub_category)
    {
        unlink('storage/' . $sub_category->image);
        $sub_category->delete();
        return redirect(route('manage-sub_category'));
    }
}
