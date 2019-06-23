<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\HomeController;

class Home extends Model
{
    protected $table = "uploads";

    public function likes()
       {
           return $this->morphToMany('App\User', 'likes')->whereDeletedAt(null);
       }

       // public function getIsLikedAttribute()
       // {
       //     $like = $this->likes()->whereUserId(Auth::id())->first();
       //     return (!is_null($like)) ? true : false;
       // }
}
