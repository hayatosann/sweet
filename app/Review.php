<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function user ()
    {
        return $this->belongsTo('App\User');
    }

    // storesだとエラー起きる
    function store ()
    {
        return $this->belongsTo('App\Store');
    }
}
