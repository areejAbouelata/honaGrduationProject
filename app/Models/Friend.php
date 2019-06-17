<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model 
{

    protected $table = 'friends';
    public $timestamps = true;
    protected $fillable = array('user_id', 'friend_id', 'relationship');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function friend()
    {
        return $this->belongsTo('App\Models\User', 'friend_id');
    }

}