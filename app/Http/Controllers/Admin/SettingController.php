<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = config('dostavka');
        return view('admin.settings.index', compact('settings'));
    }

    public function orders()
    {
        return view('admin.settings.orders');
    }

    public function goto()
    {
        $delivery_price = config('dostavka.delivery_price');
        return view('admin.settings.goto', compact('delivery_price'));
    }

    public function payment()
    {
        return view('admin.settings.payment');
    }

    public function gateway()
    {
        return view('admin.settings.sms');
    }

    public function regions()
    {
        return view('admin.settings.region');
    }

    public function update(Request $request)
    {
        if ($request->has('delivery_price')) {
            config(['dostavka.delivery_price' => $request->delivery_price]);
            $fp = fopen(base_path() . '/config/dostavka.php', 'w');
            fwrite($fp, '<?php return ' . var_export(config('dostavka'), true) . ';');
            fclose($fp);
            \Artisan::call('config:cache');
            return back();
        }

        if ($request->has('message') && $request->has('site_name')) {
            config([
            'dostavka.site_name' => $request->site_name,
            'dostavka.message' => $request->message,
            'dostavka.status' => $request->status ? 1 : 0,
            ]);
            $request->status ? \Artisan::call('down') : \Artisan::call('up');
            $fp = fopen(base_path() . '/config/dostavka.php', 'w');
            fwrite($fp, '<?php return ' . var_export(config('dostavka'), true) . ';');
            fclose($fp);
            \Artisan::call('config:cache');
            return back();
        }
    }
}
