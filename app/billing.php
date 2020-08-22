<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
      public function orders(){
        return $this->belongsTo('App\order');
    }
}
