<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmobAction extends Model
{
    //
    protected $table="jamii_admob_action";
    protected $fillable = [
        'ad_id', 'ad_name', 'ad_holder', 'ad_time','ad_active','expire','post_id','type' 
    ];
}
