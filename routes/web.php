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

Route::get('/', 'App\Http\Controllers\HomeController@renderHomePage');
Route::post('/login', 'App\Http\Controllers\HomeController@login');
Route::get('/logout', 'App\Http\Controllers\HomeController@logout');

Route::prefix('menu')->group(function (){
    Route::get('/', 'App\Http\Controllers\MenuController@renderMenuPage');
    Route::post('/add', 'App\Http\Controllers\MenuController@addMenu');
    Route::post('/update', 'App\Http\Controllers\MenuController@updateMenu')->name('menu.update');
    Route::post('/remove', 'App\Http\Controllers\MenuController@removeItem');
    
});
