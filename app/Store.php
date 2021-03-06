<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function reviews()
    {
        return $this->hasMany('App\Review')
        ->where('published_at','<',now());
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
        return $this->belongsTo('App\Prefecture');
    }

    function bestreview()
    {
        return $this->hasMany('App\Review')
        ->where('published_at', '<', now())
        ->orderBy('review', 'desc')
        ->orderBy('created_at', 'desc')
        ->first();
    }

        function review_ratings()
    {
        return $this->hasMany('App\Review')
                    ->pluck('review');
    }
}

