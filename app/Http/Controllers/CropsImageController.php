<?php

namespace App\Http\Controllers;

use App\Models\CropsImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CropsImageController extends Controller
{
    public function create(SubCategory $sub_category)
    {
        return view('admin.navbar.sub_category.images.create',compact('sub_category'));
    }

    public function store(CropsImage $crops_image)
    {

        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'crops_image' => 'required|image',
        ]);


        if(request('crops_image'))
        {
            $attributes['crops_image'] = request('crops_image')->store('crops_images','public');

            // foreach(request('crops_image') as $crops_image)
            // {
            // }
        }
        CropsImage::create($attributes);

        return redirect(route('manage-sub_category'));
    }

    public function show(SubCategory $sub_category)
    {
        return view('admin.navbar.sub_category.images.show',compact('sub_category'));
    }



    public function destroy(SubCategory $sub_category, CropsImage $crops_image)
    {
        unlink('storage/'.$crops_image->crops_image);
        $crops_image->delete();
        return redirect(route('manage-sub_category'));
    }
}
