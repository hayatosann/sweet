<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    function stores()
    {
        return $this->belongsTo('App\Store');
    }

    function users()
    {
        return $this->belongsTo('App\User');
    }
}
