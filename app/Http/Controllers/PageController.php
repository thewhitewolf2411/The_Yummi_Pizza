<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PageController extends Controller
{
    public function ShowLandingPage(){

        return view('welcome');
    }
}
