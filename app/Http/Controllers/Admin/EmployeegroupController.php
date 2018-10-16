<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\ManagerCategory;
use App\Models\Manager;
use App\Models\Employee;
use DB;
use Auth;
use App\Models\UserRole;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EmployeegroupController extends Controller
{
    public function __construct(){
        $this->middleware('permission:Сотрудники');
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $manager = $request->manager ?? null;
        if ($manager == 'all') {
            $manager = null;
        }
				$user = \Auth::user();
				$id = $user->role_id;
				$permission = $user->getPermissionsViaRoles();
				$roles = UserRole::with('manager')
				->when(!is_null($manager),function($query) use($manager){
						$query->whereManagerId($manager);
				})
				->where('manager_id', '=', $user->manager_id)
				->paginate(10);
				$managers = Manager::whereHas('employee_groups',function($query) use($id){
						$query->whereManagerId($id);
				})->get();
				return view('admin.employeesgr.index',compact('roles','permission','managers'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			   $this->validate($request, [
						'name' => 'required',
						'manager_id' => 'required',
						'permission' => 'required',
				]);
			  $role = Role::create([
            'name' => $request->input('name'),
            'manager_id' => $request->input('manager_id'),
				]);
				$role->givePermissionTo($request->input('permission'));
        return redirect()->route('employees.group.index')
                        ->with('success','Manager group created successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $user = \Auth::user();
        $permission = $user->getPermissionsViaRoles();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        return response()->json([
         'role'=> $role,
         'permission' =>$permission,
         'rolePermissions'=> $rolePermissions
     ]);
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
				$this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
				]);
				$employeerId = $request->id;
				$role = Role::findOrFail($employeerId);
				$role->update([
					'name' => $request->input('name'),
					'manager_id' => $request->input('manager_id') ?? \Auth::user()->manager_id,
				]);
				$role->syncPermissions($request->input('permission'));
        return redirect()->route('employees.group.index')
                        ->with('success','employeer category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$role = Role::find($id);
			$role->revokePermissionTo(Permission::all());
			$role->delete();
				return redirect()->route('employees.group.index')
                ->with('success','Employee Category deleted successfully');
    }
}
