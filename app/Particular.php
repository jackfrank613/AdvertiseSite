<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    //
    protected $table="jamii_particularuser";
    protected $fillable = ['name','email','password'];
}
