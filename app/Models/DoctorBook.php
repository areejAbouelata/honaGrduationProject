<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorBook extends Model 
{

    protected $table = 'doctors_books';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'doctor_id', 'hospital_id', 'visita', 'user_rating', 'examination_date', 'comment');

    public function medications()
    {
        return $this->hasMany('App\Models\MettingMedication');
    }

    public function symptoms()
    {
        return $this->hasMany('App\Models\MeetingSymptom');
    }

    public function diseases()
    {
        return $this->hasMany('App\Models\MeetingDisease');
    }

}