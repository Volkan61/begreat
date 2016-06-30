<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescriptionSerie extends Model
{


    protected $table = 'description_serie';


    protected $fillable = [
         'user_id', 'serie_id' ,
    ];


    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function serie()
    {
        return $this->belongsTo('App\Serie','serie_id');
    }



}
