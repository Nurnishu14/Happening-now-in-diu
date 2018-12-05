<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateEvent extends Model
{
    //
	protected $fillable = ['event_name','date','time','venue','event_details','need_registration'];
}
