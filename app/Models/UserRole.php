<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class UserRole extends SpatieRole
{
    protected $table = 'roles';
    
    public function manager(){
        return $this->belongsTo('App\Models\Manager');
    }
}
