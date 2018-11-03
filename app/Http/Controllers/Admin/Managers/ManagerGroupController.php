<?php
namespace App\Http\Controllers\Admin\Managers;

use App\Http\Controllers\Controller;
use App\Models\ManagerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ManagerGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Магазины');
    }

    public function index()
    {
        $managerCategories = ManagerCategory::paginate(10);
        return view('admin.groupmanagers.index', compact('managerCategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_uz' => 'required',
            'name_ru' => 'required',
        ]);
        $manager = ManagerCategory::create($request->all());
        return redirect()->route('managers.group.index')
            ->with('success', 'Группа категорий успешно создана.');
    }
    public function update(Request $request, ManagerCategory $manager)
    {
        $manager = ManagerCategory::find($request->id);
        $this->validate($request, [
            'name_ru' => 'required',
            'name_uz' => 'required',
        ]);
        $manager->update($request->all());
        return redirect()->route('managers.group.index')
            ->with('success', 'Группа категорий успешно обновлена.');
    }

    public function destroy($id)
    {
        $manager = ManagerCategory::whereHas('managers', function ($query) use ($id) {
            $query->where('manager_category_id', $id);
        })->first();
        if ($manager) {
            session()->flash('warning', 'В этой категории есть магазин!');
            return response()->json('falid', 200);
        } else {
            ManagerCategory::findOrFail($id)->delete();
            session()->flash('success', 'Группа категорий удалена успешно!');
            return response()->json('success', 200);
        }
    }
}
