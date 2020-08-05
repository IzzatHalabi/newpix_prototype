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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/items', 'ItemController@index')->name('items.index');

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/{product}', 'HomeController@show')->name('home.show');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/checkout', 'OrderController@index')->name('order.index');
Route::post('/checkout', 'OrderController@store')->name('order.store');
Route::get('/checkoutConfirmation', 'CheckoutConfirmationController@index')->name('checkoutconfirmation.index');
