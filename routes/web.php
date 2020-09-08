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

Route::get('/', 'HomeController@index');

Auth::routes(['register' => false]);
Route::get('/product/{id}', 'PhotoProductController@show')->name('product.detail');
Route::get('/products', 'PhotoProductController@index')->name('product.list');
Route::group([
    'middleware'  => 'auth',
    'prefix'      => 'dashboard'
], function() {
    Route::resource('admin', 'AdminController');
    Route::resource('product', 'ProductController');
    Route::get('/photos/{id}', 'PhotoProductController@create')->name('photos.create');
    Route::post('/photos/{id}', 'PhotoProductController@store')->name('photos.store');
    Route::delete('/photos/{id}', 'PhotoProductController@destroy')->name('photos.destroy');
    Route::resource('video', 'ProductVideoController');
});
