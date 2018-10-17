<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Branches as BranchResource;
use App\Models\Branch;

class BranchController extends Controller
{
    public function show(Request $request, Branch $branch)
    {
        return new BranchResource($branch);;
    }
}
