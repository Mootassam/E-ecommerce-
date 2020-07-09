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

// login route //

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');




});



    // Admin routes  //
Route::apiResource('/category','CategoryController');
Route::apiResource('/coupon','CouponController');
Route::apiResource('/product','ProductsController');
Route::get('parentcategory', 'CategoryController@parent');



// Route for User //
Route::apiresource('/reply', 'ReplyController');

Route::get('/homes','IndexController@homes');
Route::get('/product-detail/{id}','IndexController@detialpro');
Route::get('/product/search','IndexController@index');
// Cart route //
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::post('/apply-coupon','CouponController@applycoupon');

Route::post('/submit-checkout','CheckOutController@submitcheckout');
Route::post('/sendorder','OrdersController@store');

Route::get('/cod','OrdersController@cod');
Route::get('/paypal','OrdersController@paypal');



