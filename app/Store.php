<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function reviews()
    {
        return $this->hasMany('App\Review');
    }

    function favorites()
    {
        return $this->hasMany('App\Favorites');
    }

    function categories()
    {
        return $this->belongsTo('App\Category');
    }

    function prefectures()
    {
        return $this->belongsTo('App\Prefectue');
    }
}
