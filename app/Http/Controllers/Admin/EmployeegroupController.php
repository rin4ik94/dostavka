<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\ManagerCategory;
use App\Models\Manager;
use App\Models\Employee;
use App\Models\Menu;
use DB;
use Auth;
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
    public function index()
    {
        $user = \Auth::user();
        $permission = $user->getPermissionsViaRoles();
        $roles = Role::orderBy('id','ASC')
        ->where('id', '!=', $user->role_id)
        ->paginate(10);
        $managers = Manager::where('manager_category_id',$user->role_id)->get();
        return view('admin.employeesgr.index',compact('roles','permission','managers'));
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
         $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
        $role = Role::create([
            'name' => $request->input('name'),
            'manager_id' => $request->input('manager_id') ?? \Auth::user()->manager_id,
        ]);
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('employees.group.index')
                        ->with('success','Manager group created successfully');
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
        $employeerId = $request->id;
          $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
        $role = Role::find($employeerId);
        $role->name = $request->input('name');
        $role->manager_id = $request->input('manager_id') ?? \Auth::user()->manager_id;
        $role->save();

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
        $user = Employee::where('role_id',$id)->get();
        if(!$user)
        {$role = Role::where('id',$id)->delete();
                return redirect()->route('employees.group.index')
                ->with('success','Employee Category deleted successfully');}
        else
        {return redirect()->route('employees.group.index')->with('error','этом группе есть сотрудники!!');}
    }
}
