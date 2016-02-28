<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SsnDigit extends Model
{public $timestamps = false;
	 protected $fillable = ['*'];
    public function household()
    {



    	return $this->belongsTo('App\HouseHold');
    }
}
