<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinics extends Model
{
 protected $table='clinics';
 public $primarykey='id';
 public $timestamps='true';

 public function request(){
     return $this->belongsTo('App\requests');
 }
}
