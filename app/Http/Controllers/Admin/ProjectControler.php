<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProjectControler extends Controller
{
    public function index()
    {
        $project = Project::latest()->get();
        return view('admin.project.manage', compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'title'  => 'required|min:3|unique:projects',
            'details' => 'required',
            'image' => 'required|image',
        ]);
        $imagePath = request('image')->store('project-images', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->resize(200, 245);
        $image->save();

        Project::create([
            'title' => $attributes['title'],
            'details' => $attributes['details'],
            'image' => $imagePath,
        ]);

        return redirect(route('manage-project'));
    }


    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }



    public function update(Project $project)
    {
        $attributes = request()->validate([
            'title'  => ['required', 'min:3'],
            'details' => 'required',
            'image' => 'image',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('project-images', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->resize(200, 260);
            $image->save();

            unlink(request('old_image'));
        }

        $project->update([
            'title' => $attributes['title'],
            'details' => $attributes['details'],
            'image' => $imagePath,
        ]);


        return redirect(route('manage-project'));
    }

    public function destroy(Project $project)
    {
        unlink('storage/' . $project->image);
        $project->delete();
        return redirect(route('manage-project'));
    }
}
