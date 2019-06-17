<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model 
{

    protected $table = 'districts';
    public $timestamps = true;
    protected $fillable = array('nmae', 'city_id');

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function users()
    {
        return $this->hasMany('App\Models\City');
    }

}