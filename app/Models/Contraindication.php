<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contraindication extends Model 
{

    protected $table = 'contraindications';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'contraindication');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}