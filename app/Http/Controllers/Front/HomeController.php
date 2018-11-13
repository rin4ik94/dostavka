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
        return view('front.desktop.master');
        
    }
}