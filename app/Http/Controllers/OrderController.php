<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $deliveryMethod = session('delivery_method');
        if (!$deliveryMethod) {
            return redirect()->route('select.delivery.method');
        }

        $cart = session('cart.products');
        $total = array_reduce($cart, function ($carry, $product) {
            return $carry + $product['prod_price'] * $product['prod_qty'];
        }, 0);

        $orderData = [
            'user_id' => Auth::id(),
            'total' => $total,
            'delivery_method' => $deliveryMethod,
        ];

        if ($deliveryMethod == 'delivery') {
            $orderData['lat'] = session('lat');
            $orderData['lng'] = session('lng');
            $orderData['address'] = session('address');
            $orderData['restaurant_name'] = session('restaurant_name');
        } elseif ($deliveryMethod == 'takeaway') {
            $orderData['restaurant_name'] = session('restaurant_name');
        }

        $order = Order::create($orderData);

        foreach ($cart as $product) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product['prodid'],
                'quantity' => $product['prod_qty'],
                'price' => $product['prod_price'],
            ]);
        }

        $request->session()->forget('cart');

        return redirect()->route('order.success');
    }
}
