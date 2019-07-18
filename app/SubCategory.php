<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table = 'jamii_subcategory';
    protected $fillable = [
        'c_id','sname','option' ,
    ];

}