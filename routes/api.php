<?php

use Illuminate\Http\Request;

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
Route::apiResource('/category','CategoryController');
Route::apiResource('/coupon','CouponController');
Route::apiResource('/product','ProductsController');
Route::get('parentcategory', 'CategoryController@parent');
Route::get('order', 'ProductsController@order');




// Route for User //
Route::get('/homes','IndexController@homes');
Route::get('/product-detail/{id}','IndexController@detialpro');
