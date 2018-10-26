<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Courier;
use App\Models\Region;
class OrderController extends Controller
{
    public function index()
    {
        $q = request()->q ?? '';
        if($q){
            $orders = Order::with('manager', 'branch', 'client','payment', 'statuses', 'products', 'courier', 'region', 'status')->ofId($q)->paginate(1);
        }
        elseif(in_array(request()->status,['4','5'])){
        $orders = Order::with('manager', 'branch', 'client','payment', 'statuses', 'products', 'courier', 'region', 'status')->orderBy('id', 'desc')
        ->whereNotIn('order_status_id', [1,2,3])
        ->ofStatus(request()->status)
        ->ofDate(request()->date, request()->status)
        ->paginate(10);
            
        }else{
        $orders = Order::with('manager', 'branch', 'client','payment', 'statuses', 'courier', 'products', 'region', 'status')
        ->orderBy('id', 'desc')
        ->whereNotIn('order_status_id', [4,5])
        ->ofStatus(request()->status)
        ->paginate(10);
        }
        $branches = $orders->map(function($orders){
            return $orders->getBranches();
        });
        $regions = Region::all();
        $couriers = Courier::orderBy('id','ASC')->take(5)->get();
        return view('admin.orders.index',compact('orders','couriers','regions','delivery_price'));    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
        $order_id = $request->id;
        $order = Order::find($order_id);
        if($order->order_status_id == $request->order_status_id){
            $order->update($request->all());
        }else{
            $order->update($request->all());
            $order->statuses()->attach($request->order_status_id, ['client_id' => $order->client_id]);
        }
        // $order->products()->detach();
        return back()->with('success','successful');
    }


    public function courierChange(Request $request){
        if($request->has('id') && $request->has('courier_id')){
        $order_id = $request->id;
        $order = Order::find($order_id);
        $order->counter_id = $request->courier_id;
        $order->save();
        return back()->with('success','successful');
        }
        return back()->with('warning','order not changed');
    }

    public function destroy($id)
    {
        //
    }
}
