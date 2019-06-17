<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model 
{

    protected $table = 'diseases';
    public $timestamps = true;
    protected $fillable = array('name', 'age', 'sex', 'pain_type', 'pain_place', 'bload_preasue', 'disease_sickness', 'suger_level', 'sport_excercising', 'danger');

}