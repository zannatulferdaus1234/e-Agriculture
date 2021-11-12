<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CounterCategory;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CounterCategoryController extends Controller
{
    public function index()
    {
        $counterCategory = CounterCategory::latest()->get();
        return view('admin.counterCategory.manage', compact('counterCategory'));
    }

    public function create()
    {
        return view('admin.counterCategory.create');
    }


    public function store()
    {
        CounterCategory::create(request()->validate([
            'title'  => 'required|max:50|unique:counter_categories',
            'counter' => 'required',
        ]));

        return redirect()->route('manage-counterCategory');
    }

    public function edit(CounterCategory $counterCategory)
    {
        return view('admin.counterCategory.edit', compact('counterCategory'));
    }



    public function update(CounterCategory $counterCategory)
    {
        $counterCategory->update( request()->validate([
            'title'  => ['required', 'max:50', Rule::unique('counter_categories')->ignore($counterCategory)],
            'counter' => 'required',
        ]));

        return redirect(route('manage-counterCategory'));
    }

    public function addCounter(CounterCategory $counterCategory)
    {
        return view('admin.counterCategory.add-counter', compact('counterCategory'));
    }


    public function updateCounter(CounterCategory $counterCategory)
    {
        $attri = request()->validate([
            'counter' => 'required|numeric',
        ]);
        $val = $counterCategory->counter + request('counter');
        $counterCategory->update([
            'counter' => $val,
        ]);

        return redirect(route('manage-counterCategory'));
    }

    public function destroy(CounterCategory $counterCategory)
    {
        $counterCategory->delete();
        return redirect(route('manage-counterCategory'));
    }
}
