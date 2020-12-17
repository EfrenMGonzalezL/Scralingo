<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function user_type()
    {
        return $this->morphOne('\App\User', 'user');
    }

    public function classes()
    {
        return $this->hasMany('\App\SchoolClass');
    }
}
