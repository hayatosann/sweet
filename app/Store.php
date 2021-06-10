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
<<<<<<< Updated upstream
=======

    function bestreview()
    {
        // $today  = Carbon::today(); 
        return $this->hasMany('App\Review')
        ->where('published_at', '<', now())
        ->orderBy('review', 'desc')
        ->orderBy('created_at', 'desc')
        ->first();


    }
>>>>>>> Stashed changes
}
