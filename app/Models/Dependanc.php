<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependanc extends Model 
{

    protected $table = 'dependances';
    public $timestamps = true;
    protected $fillable = array('user_id', 'name', 'birth');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function recommendMedications()
    {
        return $this->hasMany('App\Models\RecommendMedication');
    }

    public function recommendDoctors()
    {
        return $this->hasMany('App\Models\RecommendDoctor');
    }

}