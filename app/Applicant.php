<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{public $timestamps = false;
	 protected $fillable = ['*'];
        public function household()
    {


    	return $this->belongsTo('App\HouseHold');
    }
          public function adult()
    {


    	return $this->belongsTo('App\Adult');
    }
 


    
}
