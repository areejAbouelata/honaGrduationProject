<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model 
{

    protected $table = 'medications';
    public $timestamps = true;
    protected $fillable = array('brand_name', 'name', 'describtion', 'minimum_dose', 'maximum_dose', 'dose_unit');

    public function meetingMedications()
    {
        return $this->hasMany('App\Models\MettingMedication');
    }

    public function warnings()
    {
        return $this->hasMany('App\Models\Warning');
    }

    public function clinicalPharmacologies()
    {
        return $this->hasMany('App\Models\ClinicalPharmacologie');
    }

    public function indicationUsages()
    {
        return $this->hasMany('App\Models\IndicationUsage');
    }

    public function contraindications()
    {
        return $this->hasMany('App\Models\Contraindication');
    }

    public function precautions()
    {
        return $this->hasMany('App\Models\Precaution');
    }

    public function adverse_reactions()
    {
        return $this->hasMany('App\Models\AddverseReaction');
    }

    public function drug_abuses()
    {
        return $this->hasMany('App\Models\DrugAbuse');
    }

    public function overDoses()
    {
        return $this->hasMany('App\Models\Overdose');
    }

    public function adminstrateDoses()
    {
        return $this->hasMany('App\Models\AdminstrateDose');
    }

    public function howSupplies()
    {
        return $this->hasMany('App\Models\HowSuply');
    }

}