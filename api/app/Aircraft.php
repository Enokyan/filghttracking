<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $fillable = [
        'name', 'model', 'manufacturer', 'classification', 'seats', 'speed', 'range', 'range_norm', 'height', 'width',
    ];

    public function images(){
        return $this->hasMany('App\Imageaircraft' , 'aircraft_id');
    }
}
