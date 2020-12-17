<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user_type()
    {
        return $this->morphOne('\App\User', 'user');
    }

    public function classes()
    {
        return $this->belongsToMany('\App\SchoolClass', 'student_classes', 'student_id', 'class_id');
    }

    public function avatar()
    {
        return $this->hasOne('\App\Avatar');
    }
}
