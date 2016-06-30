<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2Epi extends Model
{


    protected $table = 'user2epi';


    protected $fillable = [
         'user_id', 'episode_id' ,
    ];


    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function episode()
    {
        return $this->belongsTo('App\User','episode_id');
    }



}
