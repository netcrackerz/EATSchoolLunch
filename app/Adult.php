<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{
 protected $fillable = ['id','first_name','middle_init','last_name','household_id'];
   // protected $fillable = ['*'];
    public $timestamps = false;

  
     public function hosusehold()
    {


    	return $this->belongsTo('App\HouseHold','household_id');
    }

     public function adultincometype()
    {


    	return $this->belongsToMany('App\AdultIncomeType','adult_incomes');
    }
}
