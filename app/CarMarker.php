<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarMarker extends Model
{
    //
    protected $table = 'jamii_carmarker';
    protected $fillable = [
        'car_name',
    ];
}
