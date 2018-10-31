<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function update(Request $request, $id){
        $order_id = $request->id;
        $order = Order::findOrFail($order_id);
        $status_id = $request->order_status_id;
        if($order->order_status_id != $status_id){
            $order->order_status_id = $status_id;
            $order->save();
            $order->statuses()->attach($status_id, ['client_id' => $order->client_id]);
        }
        return back()->with('success','successful');
    }
}