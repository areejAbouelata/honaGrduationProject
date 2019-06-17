<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSport extends Model 
{

    protected $table = 'user_sports';
    public $timestamps = true;
    protected $fillable = array('user_id', 'sport_id', 'note');

}