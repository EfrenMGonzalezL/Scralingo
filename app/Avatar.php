<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public function student()
    {
        return $this->belongsTo('\App\Student');
    }

    public function accesories()
    {
        return $this->hasMany('\App\Accesory');
    }
}
