<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PasswordReset extends Model 
{

    protected $table = 'password_resets';
    public $timestamps = true;
    protected $fillable = array('email', 'token','user_id');

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id');
    }

}