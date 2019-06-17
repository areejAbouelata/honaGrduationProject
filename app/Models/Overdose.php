<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Overdose extends Model 
{

    protected $table = 'overdoses';
    public $timestamps = true;
    protected $fillable = array('resault', 'medication_id');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}