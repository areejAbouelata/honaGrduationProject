<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HowSuply extends Model 
{

    protected $table = 'how_supplies';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'describtion');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}