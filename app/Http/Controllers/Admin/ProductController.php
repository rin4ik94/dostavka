<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Manager;
use App\Models\ManagerCategory;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Image;

class ProductController extends Controller
{
   public function __construct(){
    $this->middleware('permission:Продукты');
    // $managerCategories = ManagerCategory::where('id', '!=' ,1)->get();
    //     View::share([
    //         'managerCategories' => $managerCategories
    //     ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $manager = $request->manager ?? null;
      if($manager == 'all'){
        $manager = null;
      }
      $status = $request->status ?? null;
      if($status == 'all'){
        $status = null;
      }
      $withDiscount = $request->withDiscount ?? null;
      $search = $request->q ?? null;
      $products = Product::with('category','manager')
      ->when(!is_null($status) , function ($query) use($status){
        $query->whereStatus($status);
      })
      ->when(!is_null($manager), function ($query) use($manager){
        $query->whereManagerId($manager);
      })
      ->when(!is_null($withDiscount), function ($query) use($withDiscount){
        $query->whereNotNull('old_price');
      })
      ->when(!is_null($search), function ($query) use($search){
        $query->where('name_ru', 'like',  '%' . $search .'%');
        $query->orwhere('name_uz', 'like',  '%' . $search .'%');
      })
      ->paginate(10);
      $managers = Manager::all();
      $categories = Category::where(function($query){
      $query->where('parent_id','>','0');
      })->get();
      return view('admin.products.index',compact('products','managers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $filenametostor = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($file, 'r+'));
            $mainimagepath = public_path('storage/products/'.$filenametostore);
            $mainImage = Image::make($mainimagepath);
            $ratio = 1/1;
            if(intval($mainImage->width()/$ratio > $mainImage->height())){
              $mainImage->fit(intval($mainImage->height() * $ratio),$mainImage->height());
            } else{
              $mainImage->fit($mainImage->width(), intval($mainImage->width()/$ratio));
            }
            $mainImage->resize(280,280, function($constraint) {
                $constraint->aspectRatio();
            })->fit(280,280);
            $mainImage->save($mainimagepath);
            } 
            $input = $request->all();
            $input['image'] = $filenametostore;
            $products = Product::create($input);
        return redirect()->route('products.index')
                        ->with('success','Product created successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    {
       $filenametostore = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/products/'. $filenametostore, fopen($file, 'r+'));
            $mainimagepath = public_path('storage/products/'.$filenametostore);
            $mainImage = Image::make($mainimagepath);
            $ratio = 1/1;
            if(intval($mainImage->width()/$ratio > $mainImage->height())){
              $mainImage->fit(intval($mainImage->height() * $ratio),$mainImage->height());
            } else{
              $mainImage->fit($mainImage->width(), intval($mainImage->width()/$ratio));
            }
            $mainImage->resize(280,280, function($constraint) {
                $constraint->aspectRatio();
            })->fit(280,280);
            $mainImage->save($mainimagepath);
            } 
            $input = $request->all();
            $input['image'] = $filenametostore;
            $products = Product::findOrFail($input['id']);
            $products->update($input);
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}