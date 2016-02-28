<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{public $timestamps = false;
   protected $fillable = ['id','first_name','middle_init','last_name','household_id',

    'student_flag', 'foster_flag', 'runaway_flag', 'homeless_flag','headstart_flag'];
   

// protected $fillable = ['*'];

    public function hosusehold()
    {
//return $this->hasMany('App\Child','household_id');

   	return $this->belongsTo('App\HouseHold','household_id');
    }
}
