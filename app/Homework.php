<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    //
    public function class()
    {
        return $this->belongsTo('\App\SchoolClass');
    }
}
