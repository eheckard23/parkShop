<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use App\Cart;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$cart = $request->session()->get('cart');

    	return view('cart/index', ['items' => $cart->items, 'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param id
     */
    public function addToCart(Request $request, $id) {
    	$item = Album::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($item, $item['id']);

    	$request->session()->put('cart', $cart);
    	// dd($request->session()->get('cart'));
    	return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param id
     */
    public function removeFromCart(Request $request, $id) {
    	$item = Album::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);

    	$cart->remove($item, $id);

    	$request->session()->put('cart', $cart);

    	return redirect()->back();
    }

    /**
     * Delete the current session
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteSession()
    {
    	Session::flush();

    	return redirect('/');
    }
}
