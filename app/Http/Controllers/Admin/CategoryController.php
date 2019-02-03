<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Категории');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        if ($user->id == 1) {
            $manager = $request->manager ?? null;
            $managers = Manager::all();
            $categories = Category::with('manager', 'children')->where(function ($query) use ($manager) {
                if ($manager != 'all') {
                    $query->whereManagerId($manager);
                }
                $query->whereNull('parent_id');
            })->get();
        } else {
            $selfmanager = $user->manager_id;
            $managers = Manager::whereId($selfmanager)->get();
            $categories = Category::with('manager', 'children')->where(function ($query) use ($selfmanager) {
                $query->whereManagerId($selfmanager);
                $query->whereNull('parent_id');
            })->get();
        }
        return view('admin.categories.index', compact('categories', 'managers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_uz' => 'required',
            'name_ru' => 'required',
            'manager_id' => 'required',
        ]);
        $category = Category::create($request->all());
        return redirect()->back()->with('success', "Категория успешно добавлены!");
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return $response->json($category);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_uz' => 'required',
            'name_ru' => 'required',
            'manager_id' => 'required',
        ]);
        $id = $request->id;
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return back()->with('success', 'Категория отредактирована.');
    }

    public function destroy($id)
    {
        $category = Category::whereHas('products', function ($query) use ($id) {
            $query->where('category_id', $id);
        })->get();
        if ($category->count() > 0) {
            return response()->json('В этой категории есть продукт!', 400);
        } else {
            Category::findOrFail($id)->delete();
            session()->flash('success', 'Категория удалена.');
            return response()->json('success', 200);
        }
    }
}
