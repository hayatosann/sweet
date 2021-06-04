<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function review()
    {
        return $this->hasMany('App\Review');
    }

    function favorite()
    {
        return $this->hasMany('App\Favorites');
    }

    function category()
    {
        return $this->belongsTo('App\Category');
    }

    function prefecture()
    {
        return $this->belongsTo('App\Prefectue');
    }
}
