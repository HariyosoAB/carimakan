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
    protected $table = "login";
    protected $primaryKey = "ID_Login";
    protected $fillable = [
        'Login_User','password',
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
