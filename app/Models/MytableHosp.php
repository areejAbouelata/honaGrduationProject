<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MytableHosp extends Model
{

    protected $table = 'mytableHosp';
    public $timestamps = true;
    protected $fillable = array('Hospital_Id', 'Hospital_Name' , 'Phone_Number' , '	Hospital_Type' , 'Hospital_Location');



}