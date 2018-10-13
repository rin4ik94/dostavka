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
        return view('admin.settings.index');
    }

    public function orders()
    {
        return view('admin.settings.orders');
    }

    public function goto()
    {
        return view('admin.settings.goto');
    }

    public function payment()
    {
        return view('admin.settings.payment');
    }
}
