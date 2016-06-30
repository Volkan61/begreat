<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' ,
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile()
    {
        return $this->hasOne('App\Profile');
    }



    public function tournaments()
    {
        return $this->hasMany('App\Registration');
    }


    public function seen_episodes()
    {

        return $this->belongsToMany('App\Episode', 'user2epi', 'user_id', 'episode_id');

    }




}
