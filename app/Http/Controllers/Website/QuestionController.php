<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $questions = Question::latest()->paginate(10)->onEachSide(3);
        return view('webapp.question-solution.all-question', compact('questions','category'));
    }

    public function create()
    {
        $sub_category = SubCategory::all();
        return view('webapp.question-solution.leave-question', compact('sub_category'));
    }

    public function subcat($id)
    {
        $subcategory = SubCategory::where('category_id',$id)->pluck("name","id");
        return json_encode($subcategory);
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
            'end_user_id'=> Auth::guard('end_user')->id(),
            'sub_category_id' => $attributes['sub_category_id'],
            'grain' => $attributes['grain'],
            'soil_type' => $attributes['soil_type'],
            'title' => $attributes['title'],
            'details' => $attributes['details'],
            'image' => $attributes['image'],
        ]);
        return redirect(route('webapp'));
    }


    public function single_question(Question $question)
    {
        $category = Category::all();
        return view('webapp.question-solution.single-question', compact('category','question'));
    }


}
