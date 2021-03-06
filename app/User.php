<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Eloquent implements AuthenticatableContract, 
                                    CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, Notifiable;



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    *
    *    Changes for guarded
    *    Description :   add guarded  
    *    Last edited by : Firdausneonexxa
    *
    */
       
    protected $guarded = ['id','created_at','updated_at']; 
}