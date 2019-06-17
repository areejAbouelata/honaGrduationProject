<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMytable extends Model
{

    protected $table = 'users_mytable';
    public $timestamps = true;
    protected $fillable = array('user_id', 'mytable_id');
    



}