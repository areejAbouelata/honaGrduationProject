<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'work', 'address', 'birth', 'district_id','sex' ,'describtion','following_count', 'followers_count', 'password', 'api_token');

    public function avatars()
    {
        return $this->morphMany('App\Models\Avatar' , 'avatarable');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message','sender_id');
    }

    public function mytables()
    {
        return $this->belongsToMany('App\Models\Mytable' , 'users_mytable'  , 'user_id' , 'mytable_id');
    }

}