<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ProductResource;
use App\Models\Manager;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->has('count')) {
            $products = Product::active()->paginate(request()->count);
            return ProductResource::collection($products);
        } elseif (request()->has('manager') && request()->has('category')) {
            $manager = Manager::whereSlug(request()->manager)->first();
            $category = Category::whereSlug(request()->category)->first();
            if (count($category->children) < 1) {
                $products = Product::ofCategory($category->id)->ofManager($manager->id)->active()->paginate(20);
                if (request()->price) {
                    $sorted = $products->sortBy('new_price');
                    $sorted->values()->all();
                    return ProductResource::collection($sorted->paginate(20));
                }
                return ProductResource::collection($products->paginate(20));
            } else {
                return ProductResource::collection($category->childProducts($manager->id, request()->price)->paginate(20));
            }
        } elseif (request()->has('manager')) {
            $manager = Manager::whereSlug(request()->manager)->first();
            $products = Product::ofManager($manager->id)->active()->get();
            if (request()->price) {
                $sorted = $products->sortBy('new_price');
                $sorted->values()->all();
                return ProductResource::collection($sorted->paginate(20));
            }
            return ProductResource::collection($products->paginate(20));
        } else {
            $products = Product::active()->get();
            return ProductResource::collection($products);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product->load('category', 'category.parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    public function getAddToCart(Request $request, $id)
    {
    }

    public function getCart()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
    }
}
