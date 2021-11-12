<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $reviews = Review::latest()->paginate(10)->onEachSide(3);
        return view('webapp.review.review', compact('reviews','category'));
    }

    public function create()
    {
        return view('webapp.review.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'review' => 'required',
        ]);

        Review::create([
            'end_user_id'=> Auth::guard('end_user')->id(),
            'review' => $attributes['review'],
        ]);
        return redirect(route('webapp'));
    }
}
