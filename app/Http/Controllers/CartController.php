<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use Session;
use App\Cart;

class CartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cart = $request->session()->get('cart');

        if($cart) {

            $items = $cart->items;
            $totalPrice = $cart->totalPrice;
            $totalQty = $cart->totalQty;

            return view('cart/index', ['items' => $items, 'totalPrice' => $totalPrice, 'totalQty' => $totalQty]);

        } else {

            return view('cart/index');

        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $id)
    {

        dd('test');
        // add item to cart
        $item = Album::find($id);
        $oldCart = $request->session()->get('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($item, $id);

        $request->session()->put('cart', $cart);

        return redirect()->back();

    }

    public function addOne(Request $request, $id) {

        $item = Album::find($id);
        $oldCart = $request->session()->get('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->addOne($item, $id);

        $request->session()->put('cart', $cart);

        return redirect()->back();

    }

    public function removeFromCart(Request $request, $id) {

        $item = Album::find($id);
        $oldCart = $request->session()->get('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->removeAll($item, $id);

        $request->session()->put('cart', $cart);

        return redirect()->back();

    }

    public function removeOne(Request $request, $id) {

        $item = Album::find($id);
        $oldCart = $request->session()->get('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->removeOne($item, $id);

        $request->session()->put('cart', $cart);

        return redirect()->back();

    }

    public function checkout(Request $request) {

        if($request->session()->get('cart')) {

            $cart = $request->session()->get('cart');

            $totalPrice = $cart->totalPrice;

            return view('cart/checkout', ['totalPrice' => $totalPrice]);

        }

        return redirect('/');

    }

    public function chargePayment(Request $request) {

        $cart = $request->session()->get('cart');

        \Stripe\Stripe::setApiKey('sk_test_C5CxQ2Ea3dJby8vVZNuIO6iz');

        $token = $request->get('stripeToken');

        $charge = \Stripe\Charge::create([
            'amount' => $request->get('totalPrice') * 100,
            'currency' => 'usd',
            'description' => 'Example Charge',
            'source' => $token
        ]);

        $request->session()->flush();

        return view('cart/review', ['items' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    public function deleteSession(Request $request) {

        if($request->session()->get('cart')) {

            $request->session()->flush();

        }

        return redirect()->back();

    }
    
}