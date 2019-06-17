<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminstrateDose extends Model 
{

    protected $table = 'adminstrate_doses';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'quantity_from', 'quantity_to', 'dose_unit', 'recommendation');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}