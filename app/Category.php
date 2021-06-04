<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function stores()
    {
        return $this->hasMany('App\Store');
    }

    function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
