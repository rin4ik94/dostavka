<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function count(Request $request,$count){
        $data = [];
        $order = Order::with('manager', 'branch', 'client','payment', 'statuses', 'products', 'courier', 'region', 'status')->where('order_status_id',1)->latest()->get();
        $base_count = $order->count();
        if($count < $base_count){
            $data = [
                'status' => true,
                'count' => $base_count,
                'data' => $order[0],
            ];
        }else{
            $data = [
                'status' => false,
                'count' => $base_count,
                'data' => null,
            ];
        }
        return response($data,200);
    }
}