<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname' , 'email', 'password', 'dob' , 'status' , 'occupation' , 'address' , 'mobile' ,'landline' , 'nic' , 'admission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function getLastnameAttribute($value){
        return "Mr. ".$value;
    }*/
}
