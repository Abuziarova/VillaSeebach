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

Route::get('/', 'App\Http\Controllers\HomeController@renderHomePage')->name('home');
Route::post('/login', 'App\Http\Controllers\HomeController@login');
Route::get('/logout', 'App\Http\Controllers\HomeController@logout');
Route::get('/adduser', 'App\Http\Controllers\HomeController@addUser');
Route::get('/tpay/{id}', 'App\Http\Controllers\TpayController@selectBank' )->name('tpay');
Route::post('/tpay/create', 'App\Http\Controllers\TpayController@create' );
Route::get('/orderpaid/{id}',  'App\Http\Controllers\TpayController@orderPaid');
Route::post('/booking/add', 'App\Http\Controllers\OrdersController@beforeSaveBooking');
Route::post('/daychange', 'App\Http\Controllers\OrdersController@changeDay');

Route::prefix('menu')->group(function (){
    Route::get('/', 'App\Http\Controllers\MenuController@renderMenuPage');
    Route::post('/add', 'App\Http\Controllers\MenuController@addMenu');
    Route::post('/update', 'App\Http\Controllers\MenuController@updateMenu')->name('menu.update');
    Route::post('/remove', 'App\Http\Controllers\MenuController@removeItem');
    
});

Route::prefix('orders')->group(function(){
    Route::get('/create/{booking?}', 'App\Http\Controllers\OrdersController@createOrder');
    Route::post('/save', 'App\Http\Controllers\OrdersController@saveOrder')->name('order.save');
});
