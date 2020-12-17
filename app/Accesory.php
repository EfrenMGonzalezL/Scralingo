<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }

    public function avatar()
    {
        return $this->belongsToMany('\App\Avatar');
    }
}
