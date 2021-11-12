<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('webapp.article.about.about_us', compact('category'));
    }
}
