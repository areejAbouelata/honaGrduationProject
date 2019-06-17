<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Precaution extends Model 
{

    protected $table = 'precautions';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'precaution');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}