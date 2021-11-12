<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
