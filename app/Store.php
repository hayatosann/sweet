<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function reviews()
    {

        return $this -> hasMany('App\Review');
    }
}
