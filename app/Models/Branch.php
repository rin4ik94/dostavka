<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
		protected $table = 'branches';

    protected $fillable = [
        'name', 'manager_id', 'region_id', 'address', 'status',
    ];

	  	public function workingModes()
	  {
      return $this->belongsToMany('App\Models\WorkingMode')
      ->withPivot('time_start','time_finish')
      ->withTimestamps();
	  }

	  public function region()
	  {
	      return $this->belongsTo('App\Models\Region');
	  }

	  public function manager()
	  {
	      return $this->belongsTo('App\Models\Manager');
	  }
}