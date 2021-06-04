<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function store()
    {
        return $this->hasMany('App\Store');
    }

    function review()
    {
        return $this->hasMany('App\Review');
    }
}
