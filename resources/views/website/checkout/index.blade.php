@extends('website.master')
@section('body')
    <!-- Start of Main -->
    <main class="main checkout">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="passed"><a href="{{route('cart')}}">Shopping Cart</a></li>
                    <li class="active"><a href="checkout.html">Checkout</a></li>
                    <li><a href="order.html">Complete Order</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="page-content">
                        <div class="container">

                            <form class="form checkout-form" action="" method="POST">
                                @csrf
                                <div class="row mb-9">
                                    <div class="col-lg-7 pr-lg-4 mb-4">
                                        <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">Order Checkout Information</h3>
                                        <div class="form-group mb-7">
                                            <label>Delivery Address *</label>
                                            <div class="form-input form">
                                                <textarea placeholder="Delivery Address" name="delivery_address"></textarea>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="col-md-12 mt-2">
                                                <label>Payment Method</label>
                                                <div class="single-checkbox checkbox-style-3">
                                                    <input type="radio" checked id="checkbox-3" name="payment_method" value="Cash">
                                                    <label for="checkbox-3"><span>Cash on Delivery</span></label>
                                                </div>
                                                <div class="single-checkbox checkbox-style-3">
                                                    <input type="radio" id="checkbox-4" name="payment_method" value="Online">
                                                    <label for="checkbox-4"><span>Online</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button type="submit" class="btn btn-primary" >Confirm Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                        <div class="order-summary-wrapper sticky-sidebar">
                                            <h3 class="title text-uppercase ls-10">Cart Summary</h3>
                                            <div class="order-summary">
                                                @php
                                                    $sum = 0;
                                                    $cartItems = session('cart', []);

                                                    foreach($cartItems as $item) {
                                                        $sum += ($item['price'] * $item['quantity']);
                                                    }

                                                    $shipping = 100;
                                                    $tax = round($sum * 0.02);
                                                    $totalPayable = $sum + $tax + $shipping;
                                                @endphp

                                                <table class="order-table">
                                                    <thead>
                                                    <tr>
                                                        <th><b>Product</b></th>
                                                        <th><b>Price</b></th>
                                                        <th><b>Subtotal</b></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($cartItems as $id => $item)
                                                        @php($subTotal = $item['price'] * $item['quantity'])
                                                        <tr class="bb-no">
                                                            <td class="product-name">{{ $item['name'] }}
                                                                <i class="fas fa-times"></i>
                                                                <span class="product-quantity">{{ $item['quantity'] }}</span>
                                                            </td>
                                                            <td class="product-total">{{ number_format($item['price'], 2) }}</td>
                                                            <td class="cart-subtotal">{{ number_format($subTotal, 2) }}</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="3">Your cart is empty!</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="shipping-methods">
                                                        <td colspan="2" class="text-left">
                                                            <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping & Tax</h4>
                                                            <ul id="shipping-method" class="mb-4" style="list-style: none; padding: 0;">
                                                                <li><strong>Shipping Charge:</strong> {{ number_format($shipping, 2) }}</li>
                                                                <li><strong>Tax (2%):</strong> {{ number_format($tax, 2) }}</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th><b>Total Payable</b></th>
                                                        <td><b>{{ number_format($totalPayable, 2) }}</b></td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                <input type="hidden" name="order_total" value="{{ $totalPayable }}">
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->
@endsection
