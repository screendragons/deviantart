<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
        'name',
        'description',
        'media_type',
        'datasize',
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }
}
