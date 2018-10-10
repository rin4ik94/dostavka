<?php

namespace App\Models;

use App\Traits\ExposePermissions;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
// use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Employee extends Authenticatable
{
    protected $with = [
        'roles',
    ];

	use Notifiable,HasRoles,ExposePermissions;

    protected $appends = ['can',  'binded_role'];

    protected $fillable = [
        'name', 'mobile', 'role_id', 'manager_id', 'status', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

// 
    public function role(){
        return $this->belongsTo('Spatie\Permission\Models\Role');
    }

// 
    public function permission(){
        return $this->belongsTo('Spatie\Permission\Models\Permission');
    }

//
    public function manager(){
        return $this->belongsTo('App\Models\Manager');
    }
}

