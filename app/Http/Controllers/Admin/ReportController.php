<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Отчеты');
    }

    public function index(Request $request)
    {
        $section = request()->section ?? '1';
        switch ($section) {
            case '2':
                $order = Order::where(function ($query) {
                    $query->where('order_status_id', 4);
                    $query->whereNotNull('branch_id');
                })->with('branch')->OfDates(request()->of_date, request()->to_date)->get();
                $orders = [
                    'orders' => $order->groupBy('branch_id')->map(function ($row) {
                        return [
                            'order' => $row->first()->toArray(),
                            'order_count' => $row->count(),
                            'total_amount' => $row->sum('order_price'),
                        ];
                    }),
                    'order_type' => 'branch',
                    'order_total_price' => $order->sum('order_price'),
                ];
                break;
            case '3':
                $order = Order::where(function($query){
									$query->where('order_status_id', 4);
									$query->whereNotNull('courier_id');
									$query->whereNotNull('branch_id');
								})->with('status')->OfDates(request()->of_date, request()->to_date)->get();
                $orders = [
                    'orders' => $order->groupBy('order_status_id')->map(function ($row) {
                        return [
                            'order_status_name' => 'Доставлен',
														'order_count' => $row->count(),
														'delivery_price' => $row->sum('delivery_price'),
														'total_amount' => $row->sum('order_price'),
														'total_delivery_price' => $row->sum('delivery_price') + $row->sum('order_price'),
                        ];
                    }),
                    'order_type' => 'order',
                    'order_total_price' => $order->sum('order_price'),
                ];
                break;
            case '4':
                $order = Order::where(function ($query) {
                    $query->where('order_status_id', 4);
                    $query->whereNotNull('courier_id');
                })->with('courier')->OfDates(request()->of_date, request()->to_date)->get();
                $orders = [
                    'orders' => $order->groupBy('courier_id')->map(function ($row) {
                        return [
                            'order' => $row->first()->toArray(),
                            'order_count' => $row->count(),
                            'total_amount' => $row->sum('order_price'),
                        ];
                    }),
                    'order_type' => 'courier',
                    'order_total_price' => $order->sum('order_price'),
                ];
                break;
            default:
                $order = Order::where(function($query){
									$query->where('order_status_id', 4);
								})->with('manager')->OfDates(request()->of_date, request()->to_date)->get();
                $orders = [
                    'orders' => $order->groupBy('manager_id')->map(function ($row) {
                        return [
                            'order' => $row->first()->toArray(),
                            'order_count' => $row->count(),
                            'total_amount' => $row->sum('order_price'),
                        ];
                    }),
                    'order_type' => 'manager',
                    'order_total_price' => $order->sum('order_price'),
                ];
                break;
        }
        // dd($orders);
        return view('admin.reports.index', compact('managers', 'branches', 'couriers', 'orders'));
    }
}
