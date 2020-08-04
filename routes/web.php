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

Auth::routes(['verify' => true, 'reset' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/carts', 'CartController@index')->name('carts.index')->middleware('auth');
Route::get('/carts/checkout', 'CartController@checkout')->name('carts.checkout')->middleware('auth');
Route::get('/carts/{product}/store', 'CartController@store')->name('carts.store')->middleware('auth');
Route::put('/carts/{product}', 'CartController@update')->name('carts.update')->middleware('auth');
Route::delete('/carts/{product}', 'CartController@destroy')->name('carts.destroy')->middleware('auth');

Route::resource('orders', 'OrderController');
Route::resource('shops', 'ShopController');
Route::resource('products', 'ProductController');

Route::get('paypal/checkout/{order}', 'PaypalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PaypalController@getExpressCheckoutCancel')->name('paypal.cancel');

Route::resource('user', 'UserController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
