<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropsSolution extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function question()
    {
        return $this->belongsTo(CropsQuestion::class);
    }
}
