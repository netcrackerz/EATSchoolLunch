<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *  

     * @var array
     */
    protected $fillable = ['first_name','last_name', 'email', 'password','household_id','adult_id','street_address','city',
    'state','zip','phone'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function household()
    {


        return $this->belongsTo('App\HouseHold');
    }
    public function adult()
    {


        return $this->belongsTo('App\Adult');
    }
     public function application()
    {


        return $this->hasMany('App\Application','user_id');
    }
}
