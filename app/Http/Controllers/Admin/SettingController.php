<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Настройки');
    }

    public function index()
    {
        $settings = config('dostavka');
        return view('admin.settings.index', compact('settings'));
    }

    public function orders()
    {
        $delivery_min_price = config('dostavka.delivery_min_price');
        return view('admin.settings.orders', compact('delivery_min_price'));
    }

    function goto () {
        $delivery_price = config('dostavka.delivery_price');
        $delivery_free_price = config('dostavka.delivery_free_price');
        return view('admin.settings.goto', compact('delivery_price','delivery_free_price'));
    }

    public function payment()
    {
        return view('admin.settings.payment');
    }

    public function regions()
    {
        $regions = Region::all();
        return view('admin.settings.region',compact('regions'));
    }

    public function storeRegion(Request $request){
        $this->validate($request, [
            'name_uz' => 'required',
            'name_ru' => 'required'
        ]);
        $regions = Region::create($request->only(['name_uz','name_ru']));
        return redirect()->back()->with('success', "Регион успешно добавлен!");
    }

    public function updateRegion(Request $request, $id){
        $this->validate($request, [
            'name_uz' => 'required',
            'name_ru' => 'required'
        ]);
        $region_id = $request->id;
        if(!$region_id){
          return redirect()->back()->with('warning', "Error tray again!");
        }
        $regions = Region::find($region_id);
        $regions->slug = null;
        $regions->name_uz = $request->get("name_uz");
        $regions->name_ru = $request->get("name_ru");
        $regions->save();
        return redirect()->back()->with('success', "Регион успешно обновлен!");
    }

    public function destroyRegion($id){
        if(!$id){
            return response()->json('error',400);
        }
        Region::findOrFail($id)->delete();
        session()->flash('success','Регион успешно удален!');
        return response()->json('success',200);
        
    }


    public function update(Request $request)
    {
        if ($request->has('delivery_price') && $request->has('delivery_free_price')) {
            config([
                'dostavka.delivery_price' => $request->delivery_price,
                'dostavka.delivery_free_price' => $request->delivery_free_price,
                ]);
        }
        if ($request->has('delivery_min_price')) {
            config(['dostavka.delivery_min_price' => $request->delivery_min_price]);
        }
        if ($request->has('incash')) {
            config(['dostavka.delivery_min_price' => $request->delivery_min_price]);
        }
        // incash
        if ($request->has('message') && $request->has('site_name')) {
            config([
                'dostavka.site_name' => $request->site_name,
                'dostavka.message' => $request->message,
                'dostavka.status' => $request->status ? 1 : 0,
            ]);
            $request->status ? \Artisan::call('down') : \Artisan::call('up');
        }
        $fp = fopen(base_path() . '/config/dostavka.php', 'w');
        fwrite($fp, '<?php return ' . var_export(config('dostavka'), true) . ';');
        fclose($fp);
        \Artisan::call('config:cache');
        session()->flash('success','Настройки успешно обновлены!');
        return redirect()->route('settings');
    }
}
