<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CropsQuestion;
use App\Models\SubCategory;

class CropsQuestionController extends Controller
{

    public function index()
    {
        $crops_question = CropsQuestion::latest()->get();
        return view('admin.navbar.sub_category.questions.manage',compact('crops_question'));
    }

    public function create(SubCategory $sub_category)
    {
        $sub_category = SubCategory::get();
        return view('admin.navbar.sub_category.questions.create',compact('sub_category'));
    }

    public function store(CropsQuestion $crops_question,SubCategory $sub_category)
    {
        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'grain_varieties' => 'required',
            'soil_type' => 'required',
            'title' => 'required|max:255',
            'details' => 'required|max:600',
            'image' => 'required|image',
        ]);

        if(request('image'))
        {
            $attributes['image'] = request('image')->store('crops_question_image','public');
        }
        CropsQuestion::create($attributes);

        return redirect(route('manage-crops_question'));
    }

    public function show(SubCategory $sub_category)
    {
        return view('admin.navbar.sub_category.questions.show',compact('sub_category'));
    }

    public function edit(SubCategory $sub_category,CropsQuestion $crops_question)
    {
        $sub_category = SubCategory::get();
        return view('admin.navbar.sub_category.questions.edit',compact('sub_category','crops_question'));
    }

    public function update(CropsQuestion $crops_question,SubCategory $sub_category)
    {
        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'grain_varieties' => 'required',
            'soil_type' => 'required',
            'title' => 'required|max:255',
            'details' => 'required|max:600',
            'image' => 'image',
        ]);

        if(request('image'))
        {
            $attributes['image'] = request('image')->store('crops_question_image','public');
            unlink(request('old_image'));
        }
        $crops_question->update($attributes);

        return redirect(route('manage-crops_question'));
    }


    public function destroy(SubCategory $sub_category, CropsQuestion $crops_question)
    {
        unlink('storage/'.$crops_question->image);
        $crops_question->delete();
        return redirect(route('manage-crops_question'));
    }
}
