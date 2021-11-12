<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function end_user()
    {
        return $this->belongsTo(EndUser::class);
    }
}
