<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ProductResource;
use App\Models\Manager;
use App\Models\Product;

class ProductSearchController extends Controller
{
    public function index()
    {
        $manager = Manager::whereSlug(request()->manager)->first();
        $name = \Cache::get('lang') == 'uz' ? 'name_uz' : 'name_ru';
        $products = Product::where($name, 'LIKE', '%' . request()->q . '%')->ofManager($manager->id)->active()->take(5)->get();
        return ProductResource::collection(collect($products));
    }
}
