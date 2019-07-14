<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function event()
    {
        $this->belongsTo('App\Event');
    }
}
