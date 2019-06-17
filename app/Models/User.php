<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'work', 'address', 'birth', 'city_id', 'district_id', 'following_count', 'password', 'follower_count', 'api_token', 'sex');

    public function dependances()
    {
        return $this->hasMany('App\Models\Dependanc');
    }

    public function doctors()
    {
        return $this->belongsToMany('App\Models\Doctors', 'patient_id', 'doctor_id');
    }

    public function friends()
    {
        return $this->hasMany('App\Models\Friend');
    }

    public function recommendDoctors()
    {
        return $this->hasMany('App\Models\RecommendDoctor');
    }

}