<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model 
{

    protected $table = 'doctors';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password', 'api_token', 'profissional_statement', 'hospital_id', 'practicing_from', 'started_at', 'end_at', 'visita', 'specialization_id');

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'doctor_id', 'patient_id');
    }

    public function hospital()
    {
        return $this->belongsTo('App\Models\Hospital', 'hospital_id');
    }

    public function specialization()
    {
        return $this->belongsTo('App\Models\Specialization', 'specialization_id');
    }

}