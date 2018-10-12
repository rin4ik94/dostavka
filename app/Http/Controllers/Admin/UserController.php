<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\Menu;
use App\Models\Manager;
use Illuminate\Support\Facades\View;
use App\Models\Employee;
use DB;
use Hash;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware('permission:Сотрудники');
    }

    public function index(Request $request)
    {
        $roles = Role::get();
        $managers = Manager::get();
        $emoloyees = Employee::with('manager','role')->paginate(10);
        return view('admin.employees.index',compact('emoloyees', 'roles','managers'));
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
            'mobile' => 'required|unique:employees,mobile',
            'password' => 'required',
            'manager_id' => 'required',
            'role_id' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = Employee::create($input);
        $user->assignRole($request->input('role_id'));
        return redirect()->route('employees.index')
                        ->with('success','Employee created successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Employee::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin.employees.edit',compact('user','roles','userRole'));
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
            'mobile' => 'required',
            'manager_id' => 'required',
            // 'password' => 'same:confirm-password',
            'role_id' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }
         $user = Employee::find($request->id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('employees.index')
                        ->with('success','Employee updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->route('employees.index')
                        ->with('success','Employee deleted successfully');
    }
}
