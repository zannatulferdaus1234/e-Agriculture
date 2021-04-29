<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index()
    {
        $replies = Reply::all();
        return view('admin.navbar.sub_category.comment.reply.manage', compact('replies'));
    }

    public function create(Comment $comment)
    {
        return view('admin.navbar.sub_category.comment.reply.create',compact('comment'));
    }

    public function store(User $user)
    {
        $attributes = request()->validate([
            'comment_id' => 'required',
            'details' => 'required',
        ]);

        Reply::create([
            'user_id'=> auth()->id(),
            'comment_id' => $attributes['comment_id'],
            'details' => $attributes['details'],
        ]);

        return redirect(route('manage-reply'));
    }

    public function show(Comment $comment)
    {
        return view('admin.navbar.sub_category.comment.reply.show',compact('comment'));
    }

    public function edit(Comment $comment ,Reply $reply)
    {
        return view('admin.navbar.sub_category.comment.reply.edit',compact('comment','reply'));
    }

    public function update(Comment $comment ,Reply $reply)
    {
        $reply->update(request()->validate([
            'details'      => 'required',
        ]));

        return redirect(route('manage-reply'));
    }

    public function destroy(Comment $comment ,Reply $reply)
    {
        $reply->delete();
        return redirect(route('manage-reply'));
    }
}
