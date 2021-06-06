<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function stores()
    {
        return $this -> belongsTo('App\Store');
    }
    
}
