<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetingSymptom extends Model 
{

    protected $table = 'meeting_symptoms';
    public $timestamps = true;
    protected $fillable = array('doctors_book_id', 'symptom_id', 'note');

    public function meeting()
    {
        return $this->belongsTo('App\Models\DoctorBook', 'doctors_book_id');
    }

    public function semptom()
    {
        return $this->belongsTo('App\Models\Symptom', 'semptom_id');
    }

}