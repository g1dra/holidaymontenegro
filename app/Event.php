<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function images(){
        $this->hasMany('App\Images');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
}
