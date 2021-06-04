<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    function store()
    {
        return $this->belongsTo('App\Store');
    }

    function user()
    {
        return $this->belongsTo('App\User');
    }
}
