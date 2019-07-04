<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminupcomingevents extends Model
{
    //
    protected $table='upcomingevents';
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
