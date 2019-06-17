<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model 
{

    protected $table = 'warnings';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'warning');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}