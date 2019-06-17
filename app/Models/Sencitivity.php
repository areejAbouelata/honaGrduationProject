<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sencitivity extends Model 
{

    protected $table = 'sencitivities';
    public $timestamps = true;
    protected $fillable = array('name', 'type', 'age', 'sex');

}