<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendDoctor extends Model 
{

    protected $table = 'recommend_doctors';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'doctor', 'doctor_id','rating');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'patient_id');
    }

    public function dependanc()
    {
        return $this->belongsTo('App\Models\Dependanc', 'patient_id');
    }

}