<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public $customer, $order, $orderDetail,$sslComerze;

    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect('/cart')->with('message', 'Your shopping cart is empty.');
        }

        if (Session::get('customerId')) {
            return view('website.checkout.index');
        }

        Session::put('checkout', 'checkout');

        return redirect('/customer/login')->with('message', 'Please login to complete your order.');
    }

    public function newOrder(Request $request)
    {
        $cartItems = session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect('/cart')->with('error', 'Cart is empty!');
        }


        $sum = 0;
        foreach($cartItems as $item) {
            $sum += ($item['price'] * $item['quantity']);
        }

        $shipping = 100;
        $tax = round($sum * 0.15);
        $totalPayable = $sum + $tax + $shipping;

        if ($request->payment_method == 'Cash') {
            \Illuminate\Support\Facades\DB::beginTransaction();
            try {
                $order = new Order();
                $order->customer_id      = session()->get('customerId');
                $order->order_total      = $totalPayable;
                $order->tax_total        = $tax;
                $order->shipping_total   = $shipping;
                $order->order_date       = date('Y-m-d');
                $order->order_timestamp  = time();
                $order->delivery_address = $request->delivery_address;
                $order->payment_method   = $request->payment_method;
                $order->save();

                foreach ($cartItems as $id => $item) {
                    $orderDetail = new OrderDetail();
                    $orderDetail->order_id      = $order->id;
                    $orderDetail->product_id    = $id;
                    $orderDetail->product_name  = $item['name'];
                    $orderDetail->product_price = $item['price'];
                    $orderDetail->product_qty   = $item['quantity'];
                    $orderDetail->save();
                }

                DB::commit();

                session()->forget('cart');

                return redirect('/complete-order')->with([
                    'message' => "Order placed successfully!",
                    'orderId' => $order->id
                ]);

            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with('error', 'Error: ' . $e->getMessage());
            }
        }
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }


}
