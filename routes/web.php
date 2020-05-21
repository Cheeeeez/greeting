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
    return view('welcome');
});

Route::get('greeting/{name?}', function ($name = null) {
    if ($name) {
        echo 'Hello ' . $name . '!';
    } else {
        echo 'Hello world!';
    }
});

Route::get('login', 'LoginController@getLoginForm');
Route::post('login', 'LoginController@login');
Route::get('product', 'ProductController@getDiscountForm');
Route::post('product', 'ProductController@calculateDiscount');
Route::get('dictionary', 'DictionaryController@getSearchForm');
Route::post('dictionary', 'DictionaryController@translate');
