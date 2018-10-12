<?php
namespace App\Http\Controllers\Admin\Managers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\ManagerCategory;

class ManagerGroupController extends Controller
{
    public function __construct(){
        $this->middleware('permission:Магазины');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managerCategories = ManagerCategory::where('id', '!=', 1)->paginate(10);
        return view('admin.groupmanagers.index',compact('managerCategories'));
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
            'name_uz' => 'required',
            'name_ru' => 'required',
        ]);
         $manager = ManagerCategory::create([
            'name_uz' => $request->input('name_uz'),
            'name_ru' => $request->input('name_ru'),
        ]);
        return redirect()->route('managers.group.index')
                        ->with('success','Category created successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManagerCategory $manager)
    { 
         $manager = ManagerCategory::find($request->id);
         $this->validate($request, [
            'name_ru' => 'required',
            'name_uz' => 'required',
        ]); 
            $manager->update($request->all());  
        return redirect()->route('managers.group.index')
                        ->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $manager = ManagerCategory::where('id',$id)->delete();
       if($manager)
        return redirect()->route('managers.group.index')
                        ->with('success','Category deleted successfully');
        else
            return redirect()->route('managers.group.index')
                        ->with('success','Categoty has child');
    }
}
