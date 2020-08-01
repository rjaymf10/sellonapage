<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderPaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    private $cart;
    private function checkoutData($orderId)
    {
        $this->cart = \Cart::session(auth()->id());
        $cartItems = array_map(function($item) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']
            ];
        }, $this->cart->getContent()->toArray());


        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success', $orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid(),
            'invoice_description' => 'Order description',
            'total' => $this->cart->getTotal()
        ];

        return $checkoutData;
    }

    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);
    }

    public function getExpressCheckoutSuccess($orderId, Request $request)
    {
        $checkoutData = $this->checkoutData($orderId);
        $token = $request->get('token');
        $payerId = $request->get('PayerID');

        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            //Perform transaction on Paypal
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if (in_array($status, ['Completed', 'Processed'])) {
                $order = Order::find($orderId);
                $order->is_paid = 1;
                $order->save();

                //send mail
                Mail::to($order->user->email)->send(new OrderPaid($order));

                //empty cart
                $this->cart->clear();
                
                return redirect()->route('home')->withStatus('Payment Successful!');
            }
        }
        
        return redirect()->route('home')->withError('Something went wrong!');
    }

    public function getExpressCheckoutCancel()
    {
        dd('payment failed');
    }
}
