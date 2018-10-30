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

        $client->updateClient($form['user']);
        preg_match_all('/([^-]*?)-([^,]*),?/', $products, $matches);
        $output = array_combine($matches[1], $matches[2]);
        $order = Order::storeClientOrder($client, $form);

        foreach ($matches[1] as $key => $productId) {
            $product = Product::find($productId);
            $order->attachProducts($matches[2][$key], $product, $productId, $key);
        }
        return;
    }
}
