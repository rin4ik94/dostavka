<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category as CategoryResource;
use Jenssegers\Agent\Agent as Agent;

class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        if ($agent->isMobile()) {
            return view('front.mobile.master');
        }
        if ($agent->isDesktop()) {
            return view('front.desktop.master');
        }
    }
}