<?php

namespace App\Http\Controllers\Front;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $products = $request->params['products'];
        $form = $request->params['form'];
        if (!$client = Client::where('phone', $form['user']['phone'])->first()) {
            $client = Client::create(['phone' => $form['user']['phone'], 'first_name' => $form['user']['first_name'],   'last_name' => $form['user']['last_name'],  ]);
        }
        preg_match_all('/([^-]*?)-([^,]*),?/', $products, $matches);
        $output = array_combine($matches[1], $matches[2]);
        $order = Order::storeClientOrder($client, $form);

        foreach ($matches[1] as $key => $product) {
            $productset = Product::find($product[1]);
            $order->products()->attach($product[1], ['quantity' => $matches[2][$key], 'product_name_uz' => $productset->name_uz, 'product_name_ru' => $productset->name_ru, 'product_price' => $productset->new_price, 'product_total_price' => $productset->new_price * $product['quantity'],
            'product_measurement' => $productset->measurement
            ]);
        }
        return;
        return $user;
    }
}
