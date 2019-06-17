<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model 
{

    protected $table = 'pharmacies';
    public $timestamps = true;
    protected $fillable = array('name', 'city_id', 'district_id', 'start_at', 'finish_at', 'has_delivery');

}