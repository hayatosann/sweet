<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function stores()
    {
        return $this->belongsTo('App\Store');
    }
    
    function users()
    {
        return $this->belongsTo('App\User');
    }

    function categories()
    {
        return $this->belongsTo('App\Categories');
    }
}
