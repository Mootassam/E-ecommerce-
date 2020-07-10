<?php

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
/* FrontEnd Location */
Route::get('/','IndexController@index');

Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro');
////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');
///// Cart Area /////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');
/////////////////////////
/// Apply Coupon Code
Route::post('/apply-coupon','CouponController@applycoupon');
/// Simple User Login /////



Route::get('/logout','UsersController@logout');

////// User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');
    Route::get('/check-out','CheckOutController@index');
    Route::post('/submit-checkout','CheckOutController@submitcheckout');
    Route::get('/order-review','OrdersController@index');
    Route::post('/submit-order','OrdersController@order');
    Route::get('/cod','OrdersController@cod');
    Route::get('/paypal','OrdersController@paypal');
});
///




/* Admin Location */
Auth::routes(['register'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
/*Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){

///
});*/
/*Route::get('/', 'AdminController@index')->name('admin_home'); */
/// Setting Area
Route::get('/settings', 'AdminController@settings');
Route::get('/check-pwd','AdminController@chkPassword');
Route::post('/update-pwd','AdminController@updatAdminPwd');
/// Category Area
Route::resource('admin//category','CategoryController');
Route::get('admin/delete-category/{id}','CategoryController@destroy');
Route::get('admin//check_category_name','CategoryController@checkCateName');
/// Products Area
Route::resource('admin/product','ProductsController');
Route::get('admin/delete-product/{id}','ProductsController@destroy');
Route::get('admin/delete-image/{id}','ProductsController@deleteImage');
/// Product Attribute
Route::resource('/product_attr','ProductAtrrController');
Route::get('admin/delete-attribute/{id}','ProductAtrrController@deleteAttr');
/// Product Images Gallery
Route::resource('/image-gallery','ImagesController');
Route::get('admin/delete-imageGallery/{id}','ImagesController@destroy');
/// ///////// Coupons Area //////////
Route::resource('/coupon','CouponController');
Route::get('admin/delete-coupon/{id}','CouponController@destroy');


Route::get('/home', 'HomeController@index')->name('home');



