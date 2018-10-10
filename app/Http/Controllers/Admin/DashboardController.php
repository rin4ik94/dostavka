<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;
use App\Models\Menu;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
			return view('admin.index');
    }
}
