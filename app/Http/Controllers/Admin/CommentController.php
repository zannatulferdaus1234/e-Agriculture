<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Content;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        return view('admin.navbar.sub_category.comment.manage', compact('comment'));
    }

    public function create(Content $content)
    {
        return view('admin.navbar.sub_category.comment.create',compact('content'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'content_id' => 'required',
            'details' => 'required',
        ]);

        Comment::create([
            'end_user_id'=> auth()->id(),
            'content_id' => $attributes['content_id'],
            'details' => $attributes['details'],
        ]);

        return redirect(route('manage-comments'));
    }

    public function show(Content $content)
    {
        return view('admin.navbar.sub_category.comment.show',compact('content'));
    }

    public function edit(Content $content ,Comment $comment)
    {
        return view('admin.navbar.sub_category.comment.edit',compact('content','comment'));
    }

    public function update(Content $content ,Comment $comment)
    {
        $comment->update(request()->validate([
            'details'      => 'required',
        ]));

        return redirect(route('manage-comments'));
    }

    public function destroy(Content $content ,Comment $comment)
    {
        $comment->delete();
        return redirect(route('manage-comments'));
    }

}
