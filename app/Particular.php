<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    //
    protected $table = 'admobsite_user';
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password','civility','name','com_name','siret','heading','address','zip','type','updated_at','created_at','phone'
    ];

}
