<?php

namespace App\Http\Controllers\Front;

use App\Models\Order;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $products = $request->params['products'];
        $form = $request->params['form'];

        $client = Client::where('phone', $form['user']['phone'])->first();

        $client->update(['first_name' => $form['user']['first_name'], 'last_name' => $form['user']['last_name']]);
        preg_match_all('/([^-]*?)-([^,]*),?/', $products, $matches);
        $output = array_combine($matches[1], $matches[2]);
        $order = Order::storeClientOrder($client, $form);

        foreach ($matches[1] as $key => $product) {
            $productset = Product::find($product);
            $order->products()->attach($product, ['product_count' => $matches[2][$key], 'product_name' => $productset->name_ru, 'product_name_uz' => $productset->name_uz, 'product_price' => $productset->new_price, 'product_total_price' => $productset->new_price * $matches[2][$key],
            'product_measurement' => $productset->measurement
            ]);
        }
        return;
        return $user;
    }
}
