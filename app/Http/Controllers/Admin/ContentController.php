<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ContentController extends Controller
{
    public function index()
    {
        $content = Content::latest()->get();
        return view('admin.navbar.sub_category.content.manage',compact('content'));
    }

    public function create(SubCategory $sub_category)
    {
        $sub_category = SubCategory::get();
        return view('admin.navbar.sub_category.content.create',compact('sub_category'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'title' => 'required|max:255',
            'details' => 'required|min:5',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('content-image', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
        $image->save();

        Content::create([
            'sub_category_id' => $attributes['sub_category_id'],
            'title' => $attributes['title'],
            'details' => $attributes['details'],
            'image' => $imagePath,
        ]);

        return redirect(route('manage-content'));
    }

    public function show(SubCategory $sub_category)
    {
        return view('admin.navbar.sub_category.content.show',compact('sub_category'));
    }

    public function edit(SubCategory $sub_category,Content $content)
    {
        $sub_category = SubCategory::get();
        return view('admin.navbar.sub_category.content.edit',compact('sub_category','content'));
    }

    public function update(Content $content,SubCategory $sub_category)
    {
        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'title' => 'required|max:255',
            'details' => 'required|min:5',
            'image' => 'image',
        ]);

        if (request('image')) {
            unlink(request('old_image'));
            $imagePath = request('image')->store('content-image', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->resize(320, 200);
            $image->save();

        }

        $content->update([
            'sub_category_id' => $attributes['sub_category_id'],
            'title' => $attributes['title'],
            'details' => $attributes['details'],
            'image' => $imagePath,
        ]);

        return redirect(route('manage-content'));
    }


    public function destroy(SubCategory $sub_category, Content $content)
    {
        unlink('storage/'.$content->image);
        $content->delete();
        return redirect(route('manage-content'));
    }
}
