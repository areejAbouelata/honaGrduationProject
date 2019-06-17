<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model 
{

    protected $table = 'specializations';
    public $timestamps = true;
    protected $fillable = array('specialization_name');

    public function doctors()
    {
        return $this->hasMany('App\Models\Doctors');
    }

    public function hospitals()
    {
        return $this->hasMany('App\Models\Hospital');
    }

}