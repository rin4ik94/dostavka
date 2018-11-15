<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\UserRole;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EmployeegroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Сотрудники');
    }

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
            ->when(!is_null($manager), function ($query) use ($manager) {
                $query->whereManagerId($manager);
            })
            ->where('manager_id', '=', $user->manager_id)
            ->paginate(10);
        if ($user->id == '1') {
            $managers = Manager::all();
        } else {
            $managers = Manager::whereHas('employee_groups', function ($query) use ($user) {
                $query->whereManagerId($user->manager_id);
            })->get();
        }
        return view('admin.employeesgr.index', compact('roles', 'permission', 'managers'));
    }

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
            ->with('success', 'Manager group created successfully');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $user = \Auth::user();
        $permission = $user->getPermissionsViaRoles();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        return response()->json([
            'role' => $role,
            'permission' => $permission,
            'rolePermissions' => $rolePermissions,
        ]);
    }

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
            ->with('success', 'employeer category updated successfully');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->revokePermissionTo(Permission::all());
        $role->delete();
        return redirect()->route('employees.group.index')
            ->with('success', 'Employee Category deleted successfully');
    }
}
