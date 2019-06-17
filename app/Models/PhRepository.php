<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhRepository extends Model 
{

    protected $table = 'ph_repositories';
    public $timestamps = true;
    protected $fillable = array('pharmacy_id', 'medication_id', 'amount', 'unit');

}