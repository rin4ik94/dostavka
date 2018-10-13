<?php
namespace App\Http\Controllers\Admin\Managers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\ManagerCategory;
use App\Models\Manager;
use App\Models\Menu;
use Image; //Intervention Image

class ManagerController extends Controller
{
  public function __construct()
  {
    $managerCategories = ManagerCategory::where('id', '!=', 1)->get();
    View::share([
      'managerCategories' => $managerCategories
    ]);
    $this->middleware('permission:Магазины');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $category = $request->category ?? null;
    if ($category == 'all') {
      $category = null;
    }
    $status = $request->status ?? null;
    if ($status == 'all') {
      $status = null;
    }
    $search = $request->q ?? null;
    $managers = Manager::with('employeeGroups.manager', 'managerCategory')
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
    return view('admin.managers.index', compact('managers'));
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
      'name' => 'required|unique:managers',
      'store_managerCatId' => 'required',
      'file' => 'image|mimes:jpeg,png,jpg|max:2048',
      'store_status' => 'required',
    ]);
    $filenametostore = '';
    if ($request->hasFile('file')) {
      $file = $request->file('file');
      $filenamewithextension = $file->getClientOriginalName();
      $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      $extension = $file->getClientOriginalExtension();
      $filenametostore = $filename . '_' . uniqid() . '.' . $extension;
      Storage::put('public/logos/' . $filenametostore, fopen($file, 'r+'));
      $mainimagepath = public_path('storage/logos/' . $filenametostore);
      $mainImage = Image::make($mainimagepath);
      $ratio = 4 / 3;
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
  }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $manager = Manager::find($request->id);
      $this->validate($request, [
        'name' => 'required',
        'manager_category_id' => 'required',
        'status' => 'required',
      ]);
      $filenametostore = '';
      if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filenamewithextension = $file->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filenametostore = $filename . '_' . uniqid() . '.' . $extension;
        Storage::put('public/logos/' . $filenametostore, fopen($file, 'r+'));
        $mainimagepath = public_path('storage/logos/' . $filenametostore);
        $mainImage = Image::make($mainimagepath);
        $ratio = 4 / 3;
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

      $manager->update($request->all());
      return redirect()->route('managers.index')
        ->with('success', 'Manager updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Manager::findOrFail($id)->delete();
      return redirect()->route('managers.index')
        ->with('success', 'Manager deleted successfully');
    }
  }
