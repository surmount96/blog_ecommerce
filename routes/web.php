<?php

use Illuminate\Support\Facades\Log;
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
    Log::critical('send me this error');
    // return view('base.index');
});

Route::get('/notfound',function(){
    return view('errors.pagenotfound');
})->name('notfound');

Route::get('/services', function () {
    return view('base.service');
});

Route::view('/about', 'base.about');
// Route::view('/contact', 'base.contact');
Route::post('/contact', 'ProfileController@store');
Route::get('/contact', 'ProfileController@index');
Route::view('/about', 'base.about');

Route::get('/start-session', function () {
    return view('dashboard.session');
})->middleware('auth');

Route::get('/blog', 'Api\PostController@showBlog');

Route::get('/blog/{slug}', function () {
    return view('base.post.show');
});

Route::get('/shop', function () {
    return view('base.shop');
});

Route::get('/product/{id}', function () {
    return view('base.product');
});

Route::get('/checkout', function () {
    return view('base.checkout');
});


Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/admin/{any}',function(){
        return view('admin.index');
    });
});

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth','user']], function() {
    Route::get('{any}', 'HomeController@index');
});
