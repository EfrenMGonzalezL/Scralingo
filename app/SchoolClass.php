<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    public function students()
    {
        return $this->belongsToMany('\App\Student', 'student_classes', 'class_id', 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo('\App\Teacher');
    }

    public function homeworks()
    {
        return $this->hasMany('\App\Homework');
    }
}
