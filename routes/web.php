<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@showLandingPage')->name('index');

Route::get('/data', 'PageController@GetData');

//Session route
Route::post('/add-to-cart', 'CartController@addToCart');
//Session clear
Route::post('/remove-cart', 'CartController@removeCart');

//checkout route
Route::get('/checkout', 'PageController@showCheckout');

//User dashboard route
Auth::routes(['register' => false, 'reset' => false]);
Route::get('/dashboard', 'PageController@showDashboardPage')->middleware('auth');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//add pizza route
Route::post('/addpizza', 'PageController@PostData');