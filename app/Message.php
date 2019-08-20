<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\JamiiUser;
class Message extends Model
{
    //
    protected $table="jamii_message";
    
    public function user()
    {
      return $this->belongsTo(JamiiUser::class);
    }


}
