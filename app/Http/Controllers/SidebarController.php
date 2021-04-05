<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\CropsQuestion;


class SidebarController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('website.home',compact('category'));
    }



    public function show(SubCategory $sub_category)
    {
        $category = Category::get();
        return view('website.category.category',compact('sub_category','category'));
    }


}

