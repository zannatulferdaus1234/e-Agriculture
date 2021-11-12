<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropsImage extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
