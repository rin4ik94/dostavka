<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Branch;
use App\Models\Manager;
use App\Models\Region;
use App\Models\WorkingMode;
use App\Models\WorkingTime;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Филиали');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        $manager = $request->manager ?? null;
        if ($user->id == '1') {
            $managers = Manager::all();
            if ($manager == 'all') {
                $manager = null;
            }
        } else {
            $managers = Manager::where('id', $user->manager_id)->get();
            if ($manager == 'all' || $manager != $user->manager_id) {
                $manager = $user->manager_id;
            }
        }
        $region = $request->region ?? null;
        if ($region == 'all') {
            $region = null;
        }
        $status = $request->status ?? null;
        if ($status == 'all') {
            $status = null;
        }
        $search = $request->q ?? null;
        $branches = Branch::with('manager', 'region')
            ->when(!is_null($manager), function ($query) use ($manager) {
                $query->whereManagerId($manager);
            })
            ->when(!is_null($region), function ($query) use ($region) {
                $query->whereRegionId($region);
            })
            ->when(!is_null($status), function ($query) use ($status) {
                $query->whereStatus($status);
            })
            ->when(!is_null($search), function ($query) use ($search) {
                $query->orwhere('name', 'like', '%' . $search . '%');
            })
            ->paginate(10);
            $branch = [];
        $regions = Region::all();
        $workingModes = WorkingMode::all();
        $workingTimes = WorkingTime::all();
        // dd($branches);
        return view('admin.branchs.index', compact('regions', 'workingModes', 'branches', 'workingTimes', 'managers'));
    }
    
    public function store(StoreBranchRequest $request)
    {
        $input = $request->only('name', 'manager_id', 'region_id', 'address', 'status');
        $branchs = Branch::create($input);
        $workingModes = $request->input('workingModes');
        $time_start = $request->input('time_start');
        $time_finish = $request->input('time_finish');
        foreach ($workingModes as $key => $value) {
            $branchs->workingModes()->attach($value, ['time_start' => $time_start[$key], 'time_finish' => $time_finish[$key]]);
        }
        return redirect()->back()->with('success', "Филиалов успешно добавлены!");
    }

    public function edit($id)
    {
        $branch = Branch::whereId($id)->with('workingModes')->get();
        $branchWorkdays = DB::table("branch_working_mode")->where("branch_id", $id)->get();
        return response()->json([
            'branch' => $branch,
            'branchWorkdays' => $branchWorkdays,
        ]);
    }

    public function update(UpdateBranchRequest $request, $id)
    {
        $branch = Branch::findOrFail($request->id);
        $input = $request->only('name', 'manager_id', 'region_id', 'address', 'status');
        $branch->update($input);
        return back();
    }

    public function destroy($id)
    {
        $branchs = Branch::find($id)->delete();
        session()->flash('success', 'Филиал удален успешно!');
        return response()->json('success', 200);
    }
}
