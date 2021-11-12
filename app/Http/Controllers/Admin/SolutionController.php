<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $solution = Solution::latest()->get();
        return view('admin.navbar.sub_category.solutions.manage',compact('solution'));
    }

    public function create(Question $question)
    {
        return view('admin.navbar.sub_category.solutions.create',compact('question'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'question_id' => 'required',
            'details' => 'required|min:5',
        ]);

        Solution::create([
            'user_id'=> auth()->id(),
            'question_id' => $attributes['question_id'],
            'details' => $attributes['details'],

        ]);
        return redirect(route('manage-crops_solution'));
    }


    public function show(Question $question)
    {
        return view('admin.navbar.sub_category.solutions.show',compact('question'));
    }

    public function edit(Solution $solution)
    {
        return view('admin.navbar.sub_category.solutions.edit',compact('solution'));
    }

    public function update(Solution $solution)
    {
        $solution->update(request()->validate([
            'question_id' => 'required',
            'details' => 'min:5',
        ]));

        return redirect(route('manage-crops_solution'));
    }


    public function destroy(Solution $solution)
    {
        $solution->delete();
        return redirect(route('manage-crops_solution'));
    }
}
