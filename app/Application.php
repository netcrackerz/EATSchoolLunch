<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{   

	protected $fillable = ['submitted_at','application_status','user_id'];


 protected $dates = ['submitted_at'];
   	public $timestamps = false;
  

   	public function household()
    {

			return $this->hasOne('App\HouseHold');
    }
 
 public function user()
    {

      return $this->belongsTo('App\User');
    }


      public function setSubmittedAtAttribute($value)
    {
      //  dd("in mutator" + $value);
        $this->attributes['submitted_at'] = $value;//Carbon::createFromFormat('m/d/Y', $value);
    }
}
