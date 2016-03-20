<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{


    protected $table = 'results';


    protected $fillable = [
        'tournament_id', 'user1_id', 'user2_id' ,
    ];


    public function user1()
    {
        return $this->belongsTo('App\User','user1_id');
    }

    public function user2()
    {
        return $this->belongsTo('App\User','user2_id');
    }


    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

}
