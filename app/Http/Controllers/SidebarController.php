<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SidebarController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('website.home',compact('category'));
    }


}

