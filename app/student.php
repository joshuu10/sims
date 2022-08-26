<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public function user()
     {
      return $this->belongsTo(user::class);  
    }
}
