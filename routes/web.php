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

Auth::routes();

Route::get('/', 'HomeController@index')->name('items.index');
Route::get('/items/{itemId}', 'ItemController@show')->name('items.show');
Route::post('/items/add-to-cart', 'ItemController@addToCart')->name('items.add-to-cart');
Route::delete('/items/{itemId}/add-to-cart', 'ItemController@removeFromCart')->name('items.remove-from-cart');
Route::get('/payment', 'PaymentController@create')->name('payments.create');
Route::post('/payment', 'PaymentController@store')->name('payments.store');
Route::get('/receipts', 'ReceiptController@index')->name('receipts.index');
Route::get('/receipts/{receiptId}', 'ReceiptController@show')->name('receipts.show');


// Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/{product}', 'HomeController@show')->name('home.show');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/checkout', 'OrderController@index')->name('order.index');
Route::post('/checkout', 'OrderController@store')->name('order.store');
Route::get('/checkoutConfirmation', 'CheckoutConfirmationController@index')->name('checkoutconfirmation.index');
