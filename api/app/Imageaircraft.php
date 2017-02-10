<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageaircraft extends Model
{
    protected $fillable = [
        'aircraft_id', 'imageAircrafts'
    ];

    public function aircraft(){

        return $this->belongsTo('App\Aircraft');
    }
}
