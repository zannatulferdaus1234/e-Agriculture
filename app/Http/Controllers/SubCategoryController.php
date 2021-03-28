<?php

namespace App\Http\Controllers;
use App\Models\SubCategory;
use App\Models\Category;


use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_category = SubCategory::latest()->get();
        return view('admin.navbar.sub_category.manage',compact('sub_category'));
    }

    public function create()
    {
        $category = Category::get();
        return view('admin.navbar.sub_category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'category_id'         => 'required',
            'name'                => 'required|max:50|unique:sub_categories',
            'index'               => 'max:400',
            'lifespan'            => 'max:400',
            'breed_innovation'    => 'max:400',
            'land_selection'      => 'max:400',
            'seed_picking'        => 'max:400',
            'seedbed_preparation' => 'max:400',
            'seedbed_care'        => 'max:400',
            'land_preparation'    => 'max:400',
            'planting_distance'   => 'max:400',
            'seedlings'           => 'max:400',
            'weed_control'        => 'max:400',
            'fertilizer'          => 'max:400',
            'irrigation'          => 'max:400',
            'pest'                => 'max:400',
            'insect'              => 'max:400',
            'disease'             => 'max:400',
            'harvesting'          => 'max:400',
            'yield'               => 'max:400',
            'images'              => 'image',
        ]);

        if(request('images'))
        {
            $attributes['images'] = request('images')->store('crops_images','public');
        }
        SubCategory::create($attributes);

        return redirect(route('manage-sub_category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $sub_category)
    {
        return view('admin.navbar.sub_category.edit',compact('sub_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategory $sub_category)
    {
        $sub_category->update(request()->validate([
            'name'      => 'required|max:255',
        ]));

        return redirect(route('manage-sub_category'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $sub_category)
    {
        $sub_category->delete();
        return redirect(route('manage-sub_category'));
    }
}
