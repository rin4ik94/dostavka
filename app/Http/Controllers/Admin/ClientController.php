<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $regions = Region::all();
       $clients = Client::with('client_group','region')->get();
       return view('admin.clients.index',compact('regions','clients'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'birth_date' => 'required',
            'jender' => 'required',
            'password' => 'required',
            'status' => 'required',
            'group_id' => 'required',
            'region_id' => 'required',
        ]);
        $client = Client::create($request->all());

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
