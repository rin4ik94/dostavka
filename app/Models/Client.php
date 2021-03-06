<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';

    protected $fillable = ['first_name', 'last_name', 'phone', 'password', 'birth_date', 'jender', 'status', 'region_id', 'blacklist'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function getFullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function statuses()
    {
        return $this->belongsToMany(OrderStatus::class, 'order_status_dates')->withTimestamps();
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function updateClient($form)
    {
        $this->update(['first_name' => $form['first_name'], 'last_name' => $form['last_name']]);
        return;
    }
}
