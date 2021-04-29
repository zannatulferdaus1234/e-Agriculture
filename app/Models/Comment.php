<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
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
