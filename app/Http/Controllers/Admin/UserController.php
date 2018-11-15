<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Manager;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Сотрудники');
    }

    public function index(Request $request)
    {
        $user = \Auth::user();
        
        if($user->id == 1){
            $roles = Role::all();
            $managers = Manager::get();
        }else{
            $roles = Role::where(function($query) use($user){
                $query->where('id','!=','1');
                $query->whereManagerId($user->manager_id);
            })->get();
            $managers = Manager::whereId($user->manager_id)->get();
        }
        $emoloyees = Employee::with('manager', 'role')->paginate(10);
        return view('admin.employees.index', compact('emoloyees', 'roles', 'managers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required|unique:employees,mobile',
            'password' => 'required',
            'manager_id' => 'required',
            'role_id' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = Employee::create($input);
        $user->assignRole($request->input('role_id'));
        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully');
    }

    public function edit($id)
    {
        $user = Employee::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('admin.employees.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'manager_id' => 'required',
            // 'password' => 'same:confirm-password',
            'role_id' => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }
        $user = Employee::find($request->id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully');
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully');
    }
}
