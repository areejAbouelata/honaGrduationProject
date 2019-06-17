<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendMedication extends Model 
{

    protected $table = 'recommed_medcations';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'medication', 'medication_id');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'patient_id');
    }

    public function dependanc()
    {
        return $this->belongsTo('App\Models\Dependanc', 'patient_id');
    }

}