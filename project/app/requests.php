<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    public function clinic(){
        return $this->hasMany('App\clinics');
    }
}
