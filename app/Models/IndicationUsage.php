<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndicationUsage extends Model 
{

    protected $table = 'indication_usages';
    public $timestamps = true;
    protected $fillable = array('medication_id', 'fda_approved', 'describtion');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

    public function usageSymptoms()
    {
        return $this->hasMany('App\Models\UsageSymptom');
    }

}