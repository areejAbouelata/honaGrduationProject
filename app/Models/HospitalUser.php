<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalUser extends Model 
{

    protected $table = 'hospitals_users';
    public $timestamps = true;
    protected $fillable = array('user_id', 'hospital_id', 'user_rating', 'user_opinion');

}