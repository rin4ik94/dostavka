<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Http\Resources\RegionResource;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::get();
        return RegionResource::collection($regions);
    }
}
