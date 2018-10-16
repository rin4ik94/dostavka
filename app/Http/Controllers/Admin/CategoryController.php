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
        $id = auth()->user()->id;
        $manager = $request->manager ?? null;
        $categories = [];
        if ($id == 1) {
            $managers = Employee::with('manager')->whereManagerId($id)->get();
        } else {
            $managers = Employee::with('manager')->whereManagerId($id)->first();
        }
        $categories = Category::with('manager')->where(function ($query) use ($manager) {
            if ($manager != 'all') {
                $query->where('manager_id', $manager);
            }
            $query->where('parent_id', '0');
        })->get();
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
    // return response($category, 200);
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
        Category::findOrFail($id)->delete();
        return back()->with('success', 'Категория удалена.');
    }
}
