<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function solution()
    {
        return $this->hasMany(Solution::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function end_user()
    {
        return $this->belongsTo(EndUser::class);
    }
}
