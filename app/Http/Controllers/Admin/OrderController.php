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
        $couriers = Courier::orderBy('id','ASC')->take(5)->get();
        $q = request()->q;
        
        if(in_array(request()->status,['4','5'])){
            $orders = Order::with('manager', 'branch', 'client','payment', 'courier', 'region', 'status')->orderBy('id', 'desc')
            ->whereNotIn('order_status_id', [1,2,3])
            ->ofStatus(request()->status)
            ->ofId($q)
            ->ofDate(request()->date, request()->status)
            ->paginate(10);
        }else{
            $orders = Order::with('manager', 'branch', 'client','payment', 'courier', 'region', 'status')
            ->orderBy('id', 'desc')
            ->whereNotIn('order_status_id', [4,5])
            ->ofStatus(request()->status)
            ->ofId($q)
            ->paginate(10);
        }
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
