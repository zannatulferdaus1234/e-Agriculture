<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function crops_image()
    {
        return $this->hasMany(CropsImage::class);
    }

    public function content()
    {
        return $this->hasMany(Content::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

}
