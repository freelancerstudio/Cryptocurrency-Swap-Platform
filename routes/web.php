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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/swaps', ['as'=>'home/swaps','uses'=>'HomeController@swaps']);
Route::post('/home/add/pair', 'CoinController@add_pair')->name('add_pair');


Route::get('/supported', 'CoinController@index')->name('supported');
Route::get('/supported/info/{id}', 'CoinController@info')->name('info');

Route::get('/statistics', 'StatisticsController@index')->name('statistics');
