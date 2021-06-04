<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    function store()
    {
        return $this->hasMany('App\Store');
    }
}
