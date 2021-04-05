<?php

namespace App\Http\Controllers;

use App\Models\CropsQuestion;
use App\Models\CropsSolution;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CropsSolutionController extends Controller
{

    public function index()
    {
        $solution = CropsSolution::latest()->get();
        return view('admin.navbar.sub_category.solutions.manage',compact('solution'));
    }

    public function create(CropsQuestion $question)
    {
        return view('admin.navbar.sub_category.solutions.create',compact('question'));
    }

    public function store(CropsSolution $solution)
    {
        $attributes = request()->validate([
            'crops_question_id'   => 'required',
            'title'         => 'required',
            'details'       => 'required',
            'image'         => 'required',
        ]);

        if(request('image'))
        {
            $attributes['image'] = request('image')->store('crops_solution_images','public');
        }
        CropsSolution::create($attributes);

        return redirect(route('manage-sub_category'));
    }

    public function show(CropsQuestion $question)
    {
        return view('admin.navbar.sub_category.solutions.show',compact('question'));
    }



    public function destroy(SubCategory $sub_category, CropsQuestion $question)
    {
        unlink('storage/'.$question->crops_image);
        $question->delete();
        return redirect(route('manage-sub_category'));
    }
}
