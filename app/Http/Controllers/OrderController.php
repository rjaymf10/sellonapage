<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(OrderRequest $request, Order $order)
    {
        $cart = \Cart::session(auth()->id());

        $order->order_number = uniqid('OrderNumber-');

        $order->shipping_fullname = $request->get('shipping_fullname');
        $order->shipping_address = $request->get('shipping_address');
        $order->shipping_city = $request->get('shipping_city');
        $order->shipping_state = $request->get('shipping_state');
        $order->shipping_zipcode = $request->get('shipping_zipcode');
        $order->shipping_phone = $request->get('shipping_phone');

        if (!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->get('shipping_fullname');
            $order->billing_address = $request->get('shipping_address');
            $order->billing_city = $request->get('shipping_city');
            $order->billing_state = $request->get('shipping_state');
            $order->billing_phone = $request->get('shipping_phone');
        }
        else {
            $order->billing_fullname = $request->get('shipping_fullname');
            $order->billing_address = $request->get('shipping_address');
            $order->billing_city = $request->get('shipping_city');
            $order->billing_state = $request->get('shipping_state');
            $order->billing_phone = $request->get('shipping_phone');
        }

        $order->grand_total = $cart->getTotal();
        $order->item_count = $cart->getContent()->count();
        $order->payment_method = $request->get('payment_method');
        $order->user_id = auth()->id();

        $order->save();

        //save order items
        $cartItems = $cart->getContent();

        foreach ($cartItems as $item) {
            $order->products()->attach($item->id, [
                'price' => $item->price,
                'quantity' => $item->quantity
            ]);
        }

        //payment method
        if ($request->get('payment_method') == 'paypal') {
            //redirect to paypal
            return redirect()->route('paypal.checkout', $order->id);
        }
        elseif ($request->get('payment_method') == 'stripe') {
            # code...
        }
        elseif ($request->get('payment_method') == 'cash_on_delivery') {
            //empty cart
            $cart->clear();

            return redirect()->route('home')->withStatus('Order has been placed.');
        }
        elseif ($request->get('payment_method') == 'direct_bank_transfer') {
            # code...
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
