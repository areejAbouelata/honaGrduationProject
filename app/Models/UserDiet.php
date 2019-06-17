<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDiet extends Model 
{

    protected $table = 'users_diets';
    public $timestamps = true;
    protected $fillable = array('diet_id', 'patient_id', 'started_at', 'end_at', 'duration', 'note');

}