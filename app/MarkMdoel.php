<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkMdoel extends Model
{
    //
    protected $table = 'admobsite_carmark';
    protected $fillable = [
        'sub_id','marktype','mark' 
    ];
}
