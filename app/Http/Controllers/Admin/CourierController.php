<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Courier;
use App\Http\Controllers\Controller;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->status ?? null;
        if ($status == 'all') {
            $status = null;
        }
        $search = $request->q ?? null;
        $couriers = Courier::when(!is_null($status), function ($query) use ($status) {
        $query->whereStatus($status);
      })
      ->when(!is_null($search), function ($query) use ($search) {
        $query->where('fio', 'like', '%' . $search . '%');
        $query->orwhere('mobile', 'like', '%' . $search . '%');
      })
      ->paginate(10);
     return view('admin.couriers.index', compact('couriers'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fio' => 'required',
            'mobile' => 'required',
            'password' => 'required'
        ]);
        $input = $request->all();
        $courier = Courier::create($input); 
        return redirect()->route('couriers.index')
        ->with('success', 'Courier created successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id' => 'required',
            'fio' => 'required|max:25',
            'mobile' => 'required|min:9|max:9',
            'password' => 'required|min:5|max:10'
        ]);
        $uri = $request->redirect_uri;
        $updateCourier = Courier::findOrFail($request->id);
        $input = $request->only('fio','mobile','password','status');
        $updateCourier->update($input);
        return redirect(url()->previous())
        ->with('success', 'Courier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Courier::findOrFail($id)->delete();
      return redirect()->route('couriers.index')
        ->with('success', 'Courier deleted successfully');
    }
}
