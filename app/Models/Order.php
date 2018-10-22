<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['manager_id','branch_id','client_id','courier_id','payment_type_id','order_status_id','region_id','delivery_address_street','delivery_address_home','delivery_address_floor','delivery_address_apartment','delivery_address_remark','comment','delivery_price','order_price','total_price'];

    protected $casts = [
    'delivery_price' => 'decimal',
    'order_price' => 'decimal',
    'total_price' => 'decimal',
    ];

    public function getTime(){
        return Carbon::parse($this->created_at)->format('d.m.Y H:i');
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function courier()
    {
        return $this->belongsTo(Courier::class);
    }

    public function payment()
    {
        return $this->belongsTo(PaymentType::class, 'payment_type_id');
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    
    // pivot tabels relations
    public function statuses()
    {
        return $this->belongsToMany(OrderStatus::class, 'order_status_dates')->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)
        ->withPivot(['product_name','product_count','product_price','product_total_price','product_measurement']);
    }

    public function scopeOfStatus($query, $status)
    {
        if (!$status) { return; }
        $query->where('order_status_id', $status);
    }
}
