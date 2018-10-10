<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Branch;
use App\Models\Manager;
use App\Models\ManagerCategory;
use App\Models\Menu;
use App\Models\Region;
use App\Models\WorkingMode;
use App\Models\WorkingTime;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

class BranchController extends Controller
{
 public function __construct(){
      $this->middleware('permission:Филиали');
      // $managerCategories = ManagerCategory::where('id','!=',1)->get();
      // View::share([
      //     'managerCategories' => $managerCategories,
      //     'managers' => $managers,
      // ]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
      $id = auth()->user()->manager_id;
      // $branches = Branch::with('manager','region')->whereHas('manager', function ($query){
      //   $query->where('manager_id', '2');
      // })->get();

      $manager = $request->manager ?? null;
      if($manager == 'all'){
        $manager = null;
      }
      $region = $request->region ?? null;
      if($region == 'all'){
        $region = null;
      }
      $status = $request->status ?? null;
      if($status == 'all'){
        $status = null;
      }
      $search = $request->q ?? null;
      $branches = Branch::with('manager','region')
      ->when(!is_null($manager) , function ($query) use($manager){
        $query->whereManagerId($manager);
      })
      ->when(!is_null($region) , function ($query) use($region){
        $query->whereRegionId($region);
      })
      ->when(!is_null($status) , function ($query) use($status){
        $query->whereStatus($status);
      })
      ->when(!is_null($search) , function ($query) use($search){
        $query->orwhere('name', 'like',  '%' . $search .'%');
      })
      ->paginate(10);
      $managers = Manager::all();
      $regions = Region::all();
      $workingModes = WorkingMode::all();
      $workingTimes = WorkingTime::all();
      return view('admin/branchs.index',compact('regions','workingModes','branches','workingTimes','managers'));
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
  public function store(StoreBranchRequest $request)
  {
      $input = $request->only('name', 'manager_id', 'region_id', 'address', 'status');
      $branchs = Branch::create($input);
      $workingModes = $request->input('workingModes');
      $time_start = $request->input('time_start');
      $time_finish = $request->input('time_finish');
      foreach($workingModes as $key => $value){
      $branchs->workingModes()->attach($value, ['time_start' => $time_start[$key], 'time_finish' => $time_finish[$key]]);
    }
      return redirect()->back()->with('success', "Филиалов успешно добавлены!");
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $branch = Branch::findOrFail($id);
    $branchWorkdays = DB::table("branch_working_mode")->where("branch_id",$id)
            ->pluck('branch_working_mode.working_mode_id','branch_working_mode.working_mode_id')
            ->all();
    return response()->json([
         'branch'=> $branch,
         'branchWorkdays' => $branchWorkdays
      ]);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateBranchRequest $request, $id)
  {
    $branch = Branch::findOrFail($request->id);
    $input = $request->only('name', 'manager_id', 'region_id', 'address', 'status');
    $branch->update($input);
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
      Branch::findOrFail($id)->delete();
      return back()->with('success','Филиал удален.');
  }
}