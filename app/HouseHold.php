<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{ protected $fillable = ['*'];
	//protected $fillable = ['id', 'person_id', 'student_flag', 'foster_flag', 'runaway_flag', 'homeless_flag'];
public $timestamps = false;
    public function application()
    {


    	return $this->belongsTo('App\Application','application_id');
    }
     public function ssndigit()
    {


    	return $this->hasOne('App\Ssndigit');
    }
     public function assistanceprogramparticipate()
    {


    	return $this->hasOne('App\AssistanceProgramParticipate');
    }
      public function childincome()
    {


    	return $this->hasOne('App\ChildIncome');
    }
        public function applicant()
    {


    	return $this->hasOne('App\Applicant');
    }
    public function children()
    {

              
   	        return $this->hasMany('App\Child','household_id');
    }
    public function adults()
    {


    	return $this->hasMany('App\Adult','household_id');
    }
}
