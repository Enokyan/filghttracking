<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aircrafttype extends Model
{
    protected $fillable = [
        'manufacturer', 'type', 'description',
    ];


    protected $hidden = [
        'remember_token',
    ];
}
