<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientGroup extends Model
{
	protected $table = 'client_groups';

	protected $fillable = ['name'];

	public function clients(){
	
		return $this->hasMany('App\Models\Client');
	
	}
}
