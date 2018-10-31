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
    public function index(Request $request)
    {
			 $region = $request->region ?? null;
			 if($region == 'all'){
				 $region = null;
			 }
			 $status = $request->status ?? null;
			 if($status == 'all'){
				 $status = null;
			 }
			 $blacklist = $request->blacklist ?? null;
			 $search = $request->q ?? null;
			 
			 $regions = Region::all();
			 $clients = Client::with('region')
			 ->when(!is_null($region), function($query) use($region){
				$query->whereRegionId($region);
			 })
			 ->when(!is_null($status), function($query) use($status){
				$query->whereStatus($status);
			 })
			 ->when(!is_null($blacklist), function($query) use($blacklist){
				$query->where('blacklist',true);
             })
             ->when(!is_null($search), function ($query) use ($search) {
                $query->orwhere('first_name', 'like', '%' . $search . '%');
                $query->orwhere('last_name', 'like', '%' . $search . '%');
              })
			 ->paginate(10);
    //    $regions = $clients->map(function($clients){
    //        return $clients->region;
    //    });
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
            'phone' => 'required',
            'birth_date' => 'required',
            'jender' => 'required',
            'password' => 'required',
			'status' => 'required',
            'region_id' => 'required',
        ]);
        $client = Client::create($request->all());
        return back();
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
				'first_name' => 'required',
				'last_name' => 'required',
				'phone' => 'required',
				'birth_date' => 'required',
				'jender' => 'required',
				'status' => 'required',
				'region_id' => 'required',
		]);
			$input = $request->all();
			if($request->has('blacklist')){
				$input['blacklist'] = 1;
			}else{
				$input = array_merge($input, ['blacklist' => 0]);
			}
			$client = Client::find($input['id'])
			->update($input);
			return back();
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
