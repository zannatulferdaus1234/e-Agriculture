<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Content;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createComment(SubCategory $sub_category, Content $content)
    {
        return view('webapp.comment-reply.leave-comment',compact('content'));
    }

    public function storeComment(Content $content)
    {
        $attributes = request()->validate([
            'content_id' => 'required',
            'details' => 'required',
        ]);

        Comment::create([
            'end_user_id'=> Auth::guard('end_user')->id(),
            'content_id' => $attributes['content_id'],
            'details' => $attributes['details'],
        ]);

        return redirect()->route('single_content',[$content->sub_category->name, $content->id]);
    }
}
