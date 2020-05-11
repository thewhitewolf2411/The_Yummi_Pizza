<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Ingredient;
use App\Cart;
use DB;
use Session;

class PageController extends Controller
{
    public function showLandingPage(){

        //dd($data);
        return view('welcome');
    }

    public function showDashboardPage(){
        return view('dashboard');
    }

    public function GetData(){
        $products = Product::get();

        $data = array();
        foreach($products as $product){
            $ingredient = Ingredient::where('pizza_id', $product['id'])->get();
            $ingredients = "";


            $pizza = array();
            array_push($pizza, $product['id'], $product['product_name'], $product['small'], $product['medium'], $product['jumbo'], $product['price_small'], $product['price_medium'], $product['price_jumbo']);

            $count = count($ingredient);

            foreach($ingredient as $ingredientObject){
                $ingredients .= $ingredientObject->ingridient_name;
                if(--$count <= 0){
                    break;
                }
                $ingredients .= ", ";
            }
            

            array_push($pizza, $ingredients);
            array_push($data, $pizza);
        
        }
        return $data;
    }

    public function PostData(Request $request){
        //new pizza object
        $newpizza = $request['newPizza'];

        $product = new Product();
        $product->product_name = $newpizza['pizzaname'];
        $product->small = 'S';
        $product->price_small = $newpizza['pizzasmallprice'];
        if(!is_null($newpizza['pizzamediumprice'])){
            $product->medium = 'M';
            $product->price_medium = $newpizza['pizzamediumprice'];
        }
        else{
            $product->medium = null;
            $product->price_medium = null;
        }
        if(!is_null($newpizza['pizzajumboprice'])){
            $product->jumbo = 'J';
            $product->price_jumbo = $newpizza['pizzajumboprice'];
        }
        else{
            $product->jumbo = null;
            $product->price_jumbo = null;
        }

        $product->save();
        //ingredients

        $inputingredients = explode(',',$newpizza['pizzaingridients']);
        #return $inputingredients;

        foreach($inputingredients as $inputingredient){

            $ingredients = new Ingredient();
            $ingredients->pizza_id = DB::table('product')->latest()->first()->id;
            $ingredients->ingridient_name = $inputingredient;
            $ingredients->save();
        }

        return true;
    }

    public function showCheckout(){
      
        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);
        return view('checkout', ['cart'=>$cart]);
    }
}
