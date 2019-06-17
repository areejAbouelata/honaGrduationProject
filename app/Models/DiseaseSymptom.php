<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseSymptom extends Model 
{

    protected $table = 'disease_symptoms';
    public $timestamps = true;
    protected $fillable = array('disease_id', 'symptom_id');

}