<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetingDisease extends Model 
{

    protected $table = 'meeting_diseases';
    public $timestamps = true;
    protected $fillable = array('doctors_book_id', 'disease_id', 'note');

    public function meeting()
    {
        return $this->belongsTo('App\Models\DoctorBook', 'doctors_book_id');
    }

    public function disease()
    {
        return $this->belongsTo('App\Models\Disease', 'disease_id');
    }

}