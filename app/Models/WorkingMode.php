<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingMode extends Model
{
 protected $table = 'working_modes';
 
 public function branches()
  {
    return $this->belongsToMany('App\Models\Branch')
    ->withPivot('time_start', 'time_finish')
    ->withTimestamps();
  }
}
