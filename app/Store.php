<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function reviews()
    {
        return $this->hasMany('App\Review')
        ->where('establish_at','<',now())
        ->get();
    }

    function favorites()
    {
        return $this->hasMany('App\Favorite');
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
