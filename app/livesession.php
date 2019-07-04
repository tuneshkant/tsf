<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livesession extends Model
{
    protected $table='livesessions';
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
