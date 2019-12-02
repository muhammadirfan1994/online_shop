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



Route::get('/', "PagesController@index");
Route::get('/sign_up', "PagesController@regiss");
Route::get('/sign_in', "PagesController@loginn");
Route::get('/watch', "WatchController@show");
Route::get('/watch/1', "WatchController@show1");
Route::get('/watch/2', "WatchController@show2");
Route::get('/grocery', "GrocerysController@index");
Route::get('/dress', "DressController@show");
Route::get('/dress/1', "DressController@show1");
Route::get('/dress/2', "DressController@show2");
Route::get('/shoe', "ShoeController@show");
Route::get('/shoe/1', "ShoeController@show1");
Route::get('/shoe/2', "ShoeController@show2");
Route::get('/toys', "ToysController@show");
Route::get('/toy/1', "ToysController@show1");
Route::get('/toy/2', "ToysController@show2");

Route::get('/electronics', "ElectronicsController@show");
Route::get('/electronics/1', "ElectronicsController@show1");
Route::get('/electronics/2', "ElectronicsController@show2");

Route::get('/grocery', "GrocerysController@show");
Route::get('/grocery/1', "GrocerysController@show1");
Route::get('/grocery/2', "GrocerysController@show2");
