<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = \Cart::session(auth()->id());
        $items = $cart->getContent();
        $total = $cart->getTotal();

        return view('carts.index', compact('items', 'total'));
    }

    public function store(Product $product)
    {
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return back();
    }

    public function update(Request $request, $product)
    {
        // update product quantity
        \Cart::session(auth()->id())->update($product, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->get('quantity')
            )
        ));

        return redirect()->route('carts.index');
    }

    public function destroy($product)
    {
        // remove product from cart
        \Cart::session(auth()->id())->remove($product);

        return redirect()->route('carts.index');
    }

    public function checkout()
    {
        
        return view('carts.checkout');
    }
}
