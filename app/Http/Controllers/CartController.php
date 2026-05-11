<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
//        session()->forget('cart');
//        dd(session('cart'));
        $cartItems = session()->get('cart', []);
        return view('website.cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request, $id)
    {

        $product = Product::findOrFail($id);


        $cart = session()->get('cart', []);


        $quantity = $request->query('qty', 1);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {

            $cart[$id] = [
                "name"     => $product->name,
                "quantity" => $quantity,
                "price"    => $product->selling_price,
                "image"    => $product->image,
                "category"      => $product->category->name ?? 'N/A',
                "brand"         => $product->brand->name ?? 'N/A',
                "unit"          => $product->unit->name ?? 'N/A',
                "regular_price" => $product->regular_price,
                "code"          => $product->code,
                "slug"          => $product->slug,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Product added to cart!');
    }
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed successfully!');
    }
    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {

            $cart[$id]['quantity'] = $request->qty;
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Product not found!');
    }
}
