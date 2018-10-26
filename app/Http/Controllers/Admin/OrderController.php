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
        // dd($request->all());
        $order_id = $request->id;
        $order = Order::find($order_id);
        if($order->order_status_id == $request->order_status_id){
            $order->update($request->all());
        }else{
            $order->update($request->all());
            $order->statuses()->attach($request->order_status_id, ['client_id' => $order->client_id]);
        }
        if($request->productSet != null){
        $order->products()->detach();
        $keys = array('id', 'product_name', 'product_price', 'product_measurement', 'product_count');
        $array = explode(',', $request->productSet);
        $array = array_chunk($array, 5);
        $array = array_map(function($array) use ($keys) {
            return array_combine($keys, $array);
        }, $array);
        
        foreach ($array as $product) {
            $total_price = (int)$product['product_count'] * (int)$product['product_price'];
            if($product['product_measurement']== 'шт'){
                $product_measurement = 1;
            }else {
                $product_measurement = 2;
            }
                $order->products()->attach($product['id'], ['product_name' => $product['product_name'], 'product_count' => $product['product_count'], 'product_price' => $product['product_price'], 'product_total_price' => $total_price, 'product_measurement' => $product_measurement ]);
            }
        }
        
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
