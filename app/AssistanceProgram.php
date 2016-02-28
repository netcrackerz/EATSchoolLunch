<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssistanceProgram extends Model
{public $timestamps = false;
	 protected $fillable = ['*'];
  //  protected $fillable = ['id', 'program_name'];
     public function assistanceprogramparticipate()
    {


    	return $this->hasMany('App\AssistanceProgramParticipate');
    }
}
