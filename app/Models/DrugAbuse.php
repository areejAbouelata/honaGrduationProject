<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrugAbuse extends Model 
{

    protected $table = 'drug_abuses';
    public $timestamps = true;
    protected $fillable = array('dependance', 'medication_id');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}