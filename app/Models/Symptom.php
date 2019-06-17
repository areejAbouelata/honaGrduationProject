<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model 
{

    protected $table = 'symptoms';
    public $timestamps = true;
    protected $fillable = array('type', 'place', 'symptom_form');

}