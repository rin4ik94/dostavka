<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Branches as BranchResource;
use App\Models\Branches;

class BranchController extends Controller
{
    public function show(Request $request, Branch $branch)
    {
        if ($request->has('region')) {
            return new BranchResource($branch->load('region'));
        } else {
            return new BranchResource($manager);
        }
    }
}
