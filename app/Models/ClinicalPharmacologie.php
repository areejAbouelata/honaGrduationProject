<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicalPharmacologie extends Model 
{

    protected $table = 'clinical_pharmacologies';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'discribtion');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}