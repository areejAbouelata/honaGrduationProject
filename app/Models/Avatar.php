<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model 
{

    protected $table = 'avatars';
    public $timestamps = true;
    protected $fillable = array('path', 'avatarable_id', 'avatarable_type');

    public function avatarable()
    {
        return $this->morphTo();
    }
}