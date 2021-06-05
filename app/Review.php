<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function stores()
    {
        // リレーション StoreモデルはReviewの親
        return $this -> hasMany('App\Store');
    }
    
}
