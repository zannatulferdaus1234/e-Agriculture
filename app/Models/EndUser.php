<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class EndUser extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
