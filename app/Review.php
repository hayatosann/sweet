<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function store()
    {
        return $this -> belongsTo('App\Store');
    }
    
}
　