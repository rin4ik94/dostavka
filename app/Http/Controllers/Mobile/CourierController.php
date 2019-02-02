<?php

namespace App\Http\Controllers\Mobile;

use App\Models\Order;
use App\Models\Courier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::with('status')->ofCourier(request()->courierId)->whereIn('order_status_id', [2, 3])->get();
    }

    public function done()
    {
        return Order::with('status')->ofCourier(request()->courierId)->ofStatus(4)->whereDate('created_at', request()->date)->get();
    }

    public function signin()
    {
        request()->validate([
            'form.mobile' => 'required',
            'form.password' => 'required'
        ]);
        $courier = Courier::whereMobile(request()->form['mobile'])->first();
        if (request()->form['password'] == $courier->password) {
            return $courier;
        } else {
            return response('error', 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int                       $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return $order->load('client', 'manager', 'branch', 'payment', 'status', 'region', 'products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int                       $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int                       $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int                       $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function statusChange(Request $request, $id)
    {
        $order = Order::find($id);
        $order->order_status_id = $request->status;
        $order->save();
        return response($order->load('client', 'manager', 'branch', 'payment', 'status', 'region', 'products'), 200);
    }

    public function me(Request $request, $id)
    {
        $courier = Courier::findOrFail($id);

        return response($courier, 200);
    }
}
