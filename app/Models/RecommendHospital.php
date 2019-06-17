<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendHospital extends Model 
{

    protected $table = 'recommend_hospitals';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'hospital', 'hospital_id','rating');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'patient_id');
    }

    public function dependanc()
    {
        return $this->belongsTo('App\Models\Dependanc', 'patient_id');
    }

}