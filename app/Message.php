<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\JamiiUser;
class Message extends Model
{
    //
    protected $table="jamii_message";
    protected $fillable =['message','m_id'];
    public function user(){
        return $this->belongsTo('App\JamiiUser');
    }


}
