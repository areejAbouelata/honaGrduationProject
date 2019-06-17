<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsageSymptom extends Model 
{

    protected $table = 'usages_symptoms';
    public $timestamps = true;
    protected $fillable = array('usage_id', 'symptom_name');

    public function indicationUsage()
    {
        return $this->belongsTo('App\Models\IndicationUsage');
    }

}