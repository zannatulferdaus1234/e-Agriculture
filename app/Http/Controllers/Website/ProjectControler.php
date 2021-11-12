<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectControler extends Controller
{
    public function details(Project $project)
    {
        $category = Category::get();
        return view('webapp.article.project.project_details', compact('project','category'));
    }

    public function index()
    {
        $category = Category::get();
        $projects = Project::latest()->paginate(14)->onEachSide(3);
        return view('webapp.article.project.all-project', compact('projects','category'));
    }


}
