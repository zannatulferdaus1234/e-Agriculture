<?php

namespace App\Http\Controllers\Website;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use App\Models\CounterCategory;
use App\Models\EndUser;
use App\Models\Project;
use App\Models\Question;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $contents = Content::latest()->paginate(6)->onEachSide(3);
        $projects = Project::latest()->paginate(6)->onEachSide(3);
        $counterCategory = CounterCategory::get();

        return view('webapp.index', compact('category','contents','projects','counterCategory'));
    }

    public function all_category()
    {
        $category = Category::get();
        $categories = Category::latest()->paginate(6)->onEachSide(3);
        return view('webapp.all-category.all_category', compact('category', 'categories'));
    }

    public function all_sub_category(Category $categories)
    {
        $category = Category::get();
        return view('webapp.all-sub_category.all_sub_category', compact('categories', 'category'));
    }

    public function all_content(SubCategory $sub_category)
    {
        $category = Category::get();
        return view('webapp.content.all-content', compact('sub_category', 'category'));
    }

    public function single_content(SubCategory $sub_category, Content $content)
    {
        $category = Category::get();
        return view('webapp.content.single-content', compact('content', 'category'));
    }
}
