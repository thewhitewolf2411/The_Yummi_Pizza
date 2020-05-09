<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Ingredient;

class PageController extends Controller
{
    public function ShowLandingPage(){

        //dd($data);
        return view('welcome');
    }

    public function GetData(){
        $products = Product::get();

        $data = array();
        foreach($products as $product){
            $ingredients = Ingredient::where('pizza_id', $product['id'])->get();
            $ingredients = $ingredients[0];

            $pizza = array();
            array_push($pizza, $product['id'], $product['product_name'], $product['small'], $product['medium'], $product['jumbo'], $product['price_small'], $product['price_medium'], $product['price_jumbo'], $ingredients['ingridient_one'],$ingredients['ingridient_two'],$ingredients['ingridient_three'],$ingredients['ingridient_four'],$ingredients['ingridient_five'],$ingredients['ingridient_six'],$ingredients['ingridient_seven'],$ingredients['ingridient_eight'],$ingredients['ingridient_nine'],$ingredients['ingridient_ten']);
            #dd($pizza);
            
            array_push($data, $pizza);
        
        }
        return $data;
    }
}
