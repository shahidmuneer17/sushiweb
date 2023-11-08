<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        return view('cart');
    }
    public function addtoCart(Request $request)
    {
        $product = Product::find($request->prod_id);
        $optionId = $request->option_id;
        $optionPrice = $request->option_price;

        $cart = session('cart', []);
        $cart['products'][] = [
            'prod_id' => $product->$prod_id,
            'name' => $product->prod_name,
            'price' => $product->price + $optionPrice,
            'qty' => 1,
            'option_id' => $optionId
        ];

        session(['cart' => $cart]);

        // return redirect()->back();
        // return redirect()->route('product.details', ['id' => $prod_id]);
        return view('cart');
    }
}
