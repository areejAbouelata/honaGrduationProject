<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddverseReaction extends Model 
{

    protected $table = 'adverse_reactions';
    public $timestamps = true;
    protected $fillable = array('reaction', 'medication_id');

    public function medication()
    {
        return $this->belongsTo('App\Models\Medication', 'medication_id');
    }

}