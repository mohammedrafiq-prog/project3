<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function billings(){
        return $this->hasMany('App\billing');
    }
}
