<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model 
{

    protected $table = 'hospitals';
    public $timestamps = true;
    protected $fillable = array('name', 'city', 'country', 'contact', 'rate', 'city_id', 'district_id', 'specialization_id');

    public function doctors()
    {
        return $this->hasMany('App\Models\Doctors');
    }

}