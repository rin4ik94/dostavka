<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $table = 'couriers';
    
    protected $fillable = [
        'fio', 'mobile', 'status', 'password',
    ];

}