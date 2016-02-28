<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdultIncomeType extends Model
{
	 protected $fillable = ['*'];
 //   protected $fillable = ['id', 'type'];
public $timestamps = false;
	public function adult()
    {


    	return $this->belongsToMany('App\Adult','adult_incomes');
    }
}
