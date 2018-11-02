<?php
namespace App\Http\Controllers\Admin\Managers;

use App\Http\Controllers\Controller;
use App\Models\Manager; //Laravel Filesystem
use App\Models\ManagerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Image;
//Intervention Image

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Магазины');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        $category = $request->category ?? null;
        if ($category == 'all') {
            $category = null;
        }
        $status = $request->status ?? null;
        if ($status == 'all') {
            $status = null;
        }
        $search = $request->q ?? null;
        
        if ($user->id == '1') {
            $manager = null;
        } else {
            $manager = $user->manager_id;
        }
        $managers = Manager::with('employee_groups.manager', 'managerCategory')
            ->when(!is_null($manager), function ($query) use ($manager) {
                $query->whereId($manager);
            })
            ->when(!is_null($status), function ($query) use ($status) {
                $query->whereStatus($status);
            })
            ->when(!is_null($category), function ($query) use ($category) {
                $query->whereManagerCategoryId($category);
            })
            ->when(!is_null($search), function ($query) use ($search) {
                $query->orwhere('name', 'like', '%' . $search . '%');
            })
            ->paginate(10);
        $managerCategories = ManagerCategory::all();
        return view('admin.managers.index', compact('managers','managerCategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:managers',
            'manager_category_id' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
        ]);
        $filenametostore = '';
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenametostore = $filename . '_' . uniqid() . '.' . $extension;
            Storage::put('public/logos/' . $filenametostore, fopen($file, 'r+'));
            $mainimagepath = public_path('storage/logos/' . $filenametostore);
            $mainImage = Image::make($mainimagepath);
            $ratio = 1 / 1;
            if (intval($mainImage->width() / $ratio > $mainImage->height())) {
                $mainImage->fit(intval($mainImage->height() * $ratio), $mainImage->height());
            } else {
                $mainImage->fit($mainImage->width(), intval($mainImage->width() / $ratio));
            }
            $mainImage->resize(280, 280, function ($constraint) {
                $constraint->aspectRatio();
            });
            $mainImage->save($mainimagepath);
        }
        $input = $request->all();
        $input['logo'] = $filenametostore;
        $manager = Manager::create($input);
        return redirect()->route('managers.index')
            ->with('success', 'Магазин успешно создан!');
    }

    public function update(Request $request)
    {
        $manager = Manager::find($request->id);
        $this->validate($request, [
            'name' => 'required|unique:managers',
            'manager_category_id' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
        ]);

        $filenametostore = '';
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenametostore = $filename . '_' . uniqid() . '.' . $extension;
            Storage::put('public/logos/' . $filenametostore, fopen($file, 'r+'));
            $mainimagepath = public_path('storage/logos/' . $filenametostore);
            $mainImage = Image::make($mainimagepath);
            $ratio = 1 / 1;
            if (intval($mainImage->width() / $ratio > $mainImage->height())) {
                $mainImage->fit(intval($mainImage->height() * $ratio), $mainImage->height());
            } else {
                $mainImage->fit($mainImage->width(), intval($mainImage->width() / $ratio));
            }
            $mainImage->resize(280, 280, function ($constraint) {
                $constraint->aspectRatio();
            })->fit(280, 280);
            $mainImage->save($mainimagepath);
            $manager->logo = $filenametostore;
            $manager->save();
        }
        $manager->update($request->only('name', 'manager_category_id', 'status'));
        return redirect()->route('managers.index')
            ->with('success', 'Магазин успешно обновлен!');
    }

    public function destroy($id)
    {
        $manager = Manager::find($id)->delete();
        session()->flash('success', 'Магазин удален успешно!');
        return response()->json('success', 200);
    }
}
