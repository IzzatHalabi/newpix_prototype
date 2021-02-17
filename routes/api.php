<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mcdm', 'HomeController@get_mcdm')->name('mcdm.get');
Route::get('/api', 'HomeController@get_api')->name('api.get');
Route::get('/api-get', 'HomeController@py_get_api');
Route::post('/api', 'HomeController@post_api');

Route::post('/assign', 'HomeController@assign');
Route::get('/trigger', 'HomeController@trigger');
