<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model 
{

    protected $table = 'sports';
    public $timestamps = true;
    protected $fillable = array('name', 'describtion', 'duration', 'duration_unit', 'times', 'each');

}