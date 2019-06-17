<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnos extends Model 
{

    protected $table = 'diagnosis';
    public $timestamps = true;
    protected $fillable = array('patient_id');

}