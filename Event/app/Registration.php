<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable = ['event_id','name','email','dept','s_id'];
    public function registrations()
{
    return $this->hasMany('App\Registration');
}


}

