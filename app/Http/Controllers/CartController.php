<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    #public function addToCart(Request $request, $id, $price){

    public function addToCart(Request $request){

        $product = Product::find($request->id);


        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);


        $cart->add($product->product_name, $request->price, $request->size, $product->id);
        $request->session()->put('cart', $cart);
        
        return redirect('/');
    }

    public function removeCart(Request $request){
        Session::forget('cart');

        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);
        return \redirect('/checkout')->with(['cart'=>$cart]);
    }
}
