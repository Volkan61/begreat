<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{


    protected $table = 'registrations_tournament';

    protected $fillable = ['user_id', 'tournament_id',];





    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }



    public function user()
    {
        return $this->belongsTo('App\User');
    }




}
