<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ProductResource;
use App\Models\Manager;
use App\Models\Product;
use App\Models\Category;

class ProductSearchController extends Controller
{
    public function index()
    {
        $manager = Manager::whereSlug(request()->manager)->first();
        if (\Cache::get('lang') == 'uz') {
            $products = Product::where('name_uz', 'LIKE', '%' . request()->q . '%')->ofManager($manager->id)->active()->take(5)->get();
        } else {
            $products = Product::where('name_ru', 'LIKE', '%' . request()->q . '%')->ofManager($manager->id)->active()->take(5)->get();
        }
        return ProductResource::collection(collect($products));
    }
}
