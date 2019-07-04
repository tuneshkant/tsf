<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthnews extends Model
{
    //
    protected $table='healthnews';
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
