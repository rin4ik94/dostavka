<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Manager;
use App\Models\Employee;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Категории');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $manager = $request->manager ?? null;
        if ($user->id == 1) {
            $managers = Employee::with('manager')->get();
            $categories = Category::with('manager', 'children')->where(function ($query) use ($manager) {
                if ($manager != 'all') {
                    $query->whereManagerId($manager);
                }
                $query->whereNull('parent_id');
            })->get();
        } else {
            $managers = Employee::with('manager')->whereManagerId($user->id)->get();
            $manager = $user->manager_id;
            $categories = Category::with('manager', 'children')->where(function ($query) use ($manager) {
                $query->whereManagerId($manager);
                $query->whereNull('parent_id');
            })->get();
        }
        return view('admin.categories.index', compact('categories', 'managers'));
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
            'manager_id' => 'required',
        ]);
        $category = Category::create($request->all());
        return redirect()->back()->with('success', "Категория успешно добавлены!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return $response->json($category);
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
            'name_uz' => 'required',
            'name_ru' => 'required',
            'manager_id' => 'required',
        ]);
        $id = $request->id;
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return back()->with('success', 'Категория отредактирована.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::whereHas('products', function ($query) use ($id) {
            $query->where('category_id', $id);
        })->get();
        if ($category->count() > 0) {
            return back()->with('warning', 'В этой категории есть продукт!');
        } else {
            Category::findOrFail($id)->delete();
            return back()->with('success', 'Категория удалена.');
        }
    }
}
