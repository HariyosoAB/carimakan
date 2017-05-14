<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'Username';
    public $timestamps = false;
    protected $fillable = array('Username','Location','Display_Picture','Email');
}
