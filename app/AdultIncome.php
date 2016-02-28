<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdultIncome extends Model
{
	 protected $fillable = ['*'];
	 public $timestamps = false;
      public function payfrequency()
    {


    	return $this->hasOne('App\PayFrequency');
    }
}
