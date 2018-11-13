<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManagerCategory;
use App\Http\Resources\ManagerCategoriesResource;

class ManagerCategoriesController extends Controller
{
    public function index()
    {
        if (request()->has('withManagers')) {
            $categories = ManagerCategory::get();
            return ManagerCategoriesResource::collection($categories->load(['managers' => function ($query) {
                return $query->where('status', 1);
            }, 'managers.branches' => function ($q) {
                return $q->where('region_id', request()->region);
            }, 'managers.managerCategory', 'managers.branches.region']));
        }
        $categories = ManagerCategory::get();
        return ManagerCategoriesResource::collection($categories);
    }
}
