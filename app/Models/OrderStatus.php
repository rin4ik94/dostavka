<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class OrderStatus extends Model
{
    protected $fillable = ['name','color'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getTime(){
        return Carbon::parse($this->created_at)->format('d.m.Y H:i');
    }
}
