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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'admin'], function(){
    Route::post('/product','Api\OrderController@store');
    Route::get('/products','Api\OrderController@allProduct');
    Route::get('/posts','Api\PostController@index');
    Route::post('/post', 'Api\PostController@store');
    Route::post('/category', 'Api\OrderController@storeCategory');
    Route::get('/category', 'Api\OrderController@getCategory');
    Route::get('/orders', 'Api\OrderController@allOrder');
    Route::get('/count-order', 'Api\OrderController@countOrder');
    Route::get('/all-users','Api\PostController@registeredUsers');
    Route::get('/saved-users','Api\PostController@users');
});
Route::post('/login','Api\UserController@login');
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/auth-user','Api\UserController@user');
});


Route::post('/pay', 'PaymentController@pay');
Route::post('/checkout', 'PaymentController@checkout');
Route::post('/payment/callback', 'PaymentController@callback');
Route::post('/checkout/callback', 'PaymentController@checkoutCallback');
Route::get('valid-session', 'PaymentController@getSession');
Route::patch('update-profile', 'ProfileController@profile');

Route::get('/products', 'Api\OrderController@allProduct');
Route::get('/product', 'Api\OrderController@show'); 
 