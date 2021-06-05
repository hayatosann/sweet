<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function reviews()
    {
        // リレーション StoreモデルにReviewは属する
        return $this -> belongsTo('App\Review');
    }
}
