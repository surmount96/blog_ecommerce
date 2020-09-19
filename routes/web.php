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
    return view('base.index');
});

Route::get('/services', function () {
    return view('base.service');
});

Route::view('/about', 'base.about');
Route::view('/contact', 'base.contact');
Route::view('/about', 'base.about');

Route::get('/start-session', function () {
    return view('dashboard.session');
})->middleware('auth');

Route::get('/blog', function () {
    return view('base.blog');
});

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('{any}', 'HomeController@index');
});
