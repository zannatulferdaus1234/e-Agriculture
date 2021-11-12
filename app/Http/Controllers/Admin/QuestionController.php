<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $crops_question = Question::latest()->get();
        return view('admin.navbar.sub_category.questions.manage',compact('crops_question'));
    }

    public function create(SubCategory $sub_category)
    {
        $sub_category = SubCategory::get();
        return view('admin.navbar.sub_category.questions.create',compact('sub_category'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'grain' => '',
            'soil_type' => '',
            'title' => 'required',
            'details' => '',
            'image' => 'image',
        ]);

        if(request('image'))
        {
            $attributes['image'] = request('image')->store('question_image','public');
        }

        Question::create([
            'end_user_id'=> auth()->id(),
            'sub_category_id' => $attributes['sub_category_id'],
            'grain' => $attributes['grain'],
            'soil_type' => $attributes['soil_type'],
            'title' => $attributes['title'],
            'details' => $attributes['details'],
            'image' => $attributes['image'],
        ]);

        return redirect(route('manage-crops_question'));
    }

    public function show(SubCategory $sub_category)
    {
        return view('admin.navbar.sub_category.questions.show',compact('sub_category'));
    }

    public function edit(SubCategory $sub_category,Question $crops_question)
    {
        $sub_category = SubCategory::get();
        return view('admin.navbar.sub_category.questions.edit',compact('sub_category','crops_question'));
    }

    public function update(Question $crops_question,SubCategory $sub_category)
    {
        $attributes = request()->validate([
            'sub_category_id' => 'required',
            'grain' => '',
            'soil_type' => '',
            'title' => 'required|max:255',
            'details' => 'min:5',
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


    public function destroy(SubCategory $sub_category, Question $crops_question)
    {
        if(request('image'))
        {

        unlink('storage/'.$crops_question->image); }
        $crops_question->delete();
        return redirect(route('manage-crops_question'));
    }
}
