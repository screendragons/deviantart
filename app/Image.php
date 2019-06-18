<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id',
    	'user_id',
    	'filename',
    	'name',
    	'description',
    	'media_type',
    	'datasize',

    ];

    // public function user()
    // {
    // 	return $this->belongsTo('App\User');
    // }

}
