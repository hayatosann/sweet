<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    function stores()
    {
        return $this->hasMany('App\Store');
    }
}
