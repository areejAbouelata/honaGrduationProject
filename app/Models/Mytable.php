<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mytable extends Model
{

    protected $table = 'mytable';
    public $timestamps = true;
    protected $fillable = array('Doctor_ID', '	Doctor_Name' , 'Phone_Number' , 'Doctor_Type' , 'Doctor_Location');


    public function users()
    {
        return $this->belongsToMany('App\User' , 'users_mytable'  , 'user_id' , 'mytable_id');
    }

}