<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MettingMedication extends Model 
{

    protected $table = 'meeting_medications';
    public $timestamps = true;
    protected $fillable = array('meeting_id', 'medication_id', 'doc_advice', 'times', 'unit', 'duration');

    public function meeting()
    {
        return $this->belongsTo('App\Models\DoctorBook', 'meeting_id');
    }

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}