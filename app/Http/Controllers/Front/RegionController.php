<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Http\Resources\RegionResource;

class RegionController extends Controller
{
    public function index()
    {
        return RegionResource::collection(Region::get());
    }

    public function show(Region $region)
    {
        return new RegionResource($region);
    }
}
