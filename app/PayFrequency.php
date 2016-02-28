<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayFrequency extends Model
{
	public $timestamps = false;
    protected $fillable = ['*'];
      public function childincome()
    {


    	return $this->hasOne('App\ChildIncome');
    }
       public function adultincome()
    {


    	return $this->hasOne('App\AdultIncome');
    }
}
