<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Message;
class JamiiUser extends Model
{
    //
    protected $table = 'jamii_user_table';
    protected $fillable = ['name','f_name','email','password','com_name','siret','heading','address','zip','phone','type','status','civility'];
}
