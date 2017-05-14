<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
  protected $table = 'login';
   protected $primaryKey = 'ID_Login';
   public $timestamps = false;
   protected $fillable = array('Login_User','Password');
}
