<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssistanceProgramParticipate extends Model
{public $timestamps = false;
	 protected $fillable = ['*'];
  //  protected $fillable = ['household_id', 'assistance_program_id'];
      public function household()
    {


    	return $this->belongsTo('App\HouseHold');
    }
      public function assistanceprogram()
    {


    	return $this->belongsTo('App\AssistanceProgram');
    }
}
