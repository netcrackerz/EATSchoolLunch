<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildIncome extends Model
{public $timestamps = false;
	 protected $fillable = ['*'];
       public function household()
    {


    	return $this->belongsTo('App\HouseHold');
    }
       public function payfrequency()
    {


    	return $this->belongsTo('App\PayFrequency');
    }
}
