<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function store()
    {
        return $this->belongsTo('App\Store');
    }
    
    function user()
    {
        return $this->belongsTo('App\User');
    }

    function category()
    {
        return $this->belongsTo('App\Category');
    }
}
