<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBotMessage extends Model 
{

    protected $table = 'users_bot_messages';
    public $timestamps = true;
    protected $fillable = array('user_id', 'body');

}