<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Courier;
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

        $couriers = Courier::orderBy('id','ASC')->take(5)->get();
        return view('admin.orders.index',compact('orders','couriers'));    
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
        $order_id = $request->id;
        $order = Order::find($order_id);
        $order->update($request->all());

        return back()->with('success','successful');
    }

    public function destroy($id)
    {
        //
    }
}
