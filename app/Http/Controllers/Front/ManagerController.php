<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\Region;
use App\Http\Resources\Manager as ManagerResource;

class ManagerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('region')) {
            $managers = Manager::whereHas('branches', function ($q) use ($request) {
                $q->where('region_id', $request->region);
            })->get();
            return ManagerResource::collection($managers->load(['branches' => function ($query) use ($request) {
                return $query->where('region_id', $request->region)->where('status', 1);
            }]));
        } else {
            $managers = Manager::get();
            return ManagerResource::collection($managers);
        }
    }
    public function show(Request $request, Manager $manager)
    {
        if ($request->has('region')) {
            $region = Region::whereSlug(request()->region)->firstOrFail();
            return new ManagerResource($manager->load(['branches' => function ($query) use ($request, $region) {
                return $query->where('region_id', $region->id)->where('status', 1);
            }]));
        } else {
            return new ManagerResource($manager);
        }
    }
    public function getProducts(Request $request, Manager $manager)
    {
        return $manager->load('products');
    }
}
