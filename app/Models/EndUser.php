<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class EndUser extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function getAvatarAttribute($value)
    {
        if($value) {
            return asset('storage/'.$value);
        }
        else{
            return asset('assets/webapp/images/teamlarge.jpg');
        }
    }


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

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
