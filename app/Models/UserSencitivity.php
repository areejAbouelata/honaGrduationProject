<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSencitivity extends Model 
{

    protected $table = 'users_sencitivities';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'sencitivity_id', 'note');

}