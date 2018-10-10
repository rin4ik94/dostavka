<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
  	protected $table = 'employee_groups';
    protected $fillable = [
        'name', 'manager_id',
    ];
    public function employees(){
    	return $this->hasMany('App\Models\Employee');
    }

    public function manager(){
    	return $this->belongsTo('App\Models\Manager');
    }
}