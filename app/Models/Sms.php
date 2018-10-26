<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    protected $fillable = [
        'phone', 'type', 'status', 'text', 'code'
    ];
    protected $table = 'sms';
    public function scopeOfTime($query)
    {
        $query->where(
            'created_at',
            '>',
            Carbon::now()->subHours(1)->toDateTimeString()
        );
    }
}
