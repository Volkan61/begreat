<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'description', 'game',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
 //   protected $hidden = [
 //       'password', 'remember_token',
 //   ];



    public function user()
    {
        return $this->hasOne('App\User');
    }



    public function registrations()
    {
        return $this->hasMany('App\Registration');
    }




}
