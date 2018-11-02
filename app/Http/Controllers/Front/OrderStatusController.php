<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
class OrderStatusController extends Controller
{
    public function count(){
        $data = [];
        $order = Order::with('manager', 'branch', 'client','payment', 'statuses', 'products', 'courier', 'region', 'status')->where('order_status_id',1)->latest()->get();
        $base_count = $order->count();
        if(Cache::has('order_count')){
        $count = Cache::get('order_count');
            if($count < $base_count){
                Cache::put('order_count', $base_count, 15);
                $data = [
                    'status' => true,
                    'count' => $base_count,
                    'new' => $base_count - $count,
                    'data' => $order[0],
                ];
            }else{
                $data = [
                    'status' => false,
                    'count' => $base_count,
                    'data' => null,
                ];
            }
        }else{
            Cache::put('order_count', $base_count, 15);
            $data = [
                'status' => false,
                'count' => $base_count,
                'data' => null,
            ];
        }

        return response($data,200);
    }
}