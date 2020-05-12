<?php

namespace App;

use App\Product;
use DB;

class Cart
{
   public $items = [];
   public $totalPrice = 0;

   public function __construct($oldCart){
       if($oldCart){
           $this->items = $oldCart->items;
           $this->totalPrice = $oldCart->totalPrice;
       }
   }

   public function add($item, $price, $size, $id){

       $storedItem = ['price'=>$price, 'item'=>$item, 'size'=>$size, 'id'=>$id];

       $storedItem['price'] = $price;

       array_push($this->items, $storedItem);
       $this->totalPrice += $price;
   }
}
