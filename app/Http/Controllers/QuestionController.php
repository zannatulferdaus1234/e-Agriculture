<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CropsQuestion;
use App\Models\SubCategory;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show(SubCategory $sub_category, CropsQuestion $crops_question)
    {
        $category = Category::get();

        return view ('website.category.question',compact('crops_question','category'));

    }
}
