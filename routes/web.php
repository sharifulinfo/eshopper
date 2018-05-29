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

//Frontend Route.....................................................................................
Route::get('/','ProductController@index');
Route::get('/category/{id}','ProductController@categories');
Route::get('/brand/{id}','ProductController@brands');
Route::get('/productdeltail/{id}','ProductController@productdetail');

//cart controller
Route::post('addcart/','CartController@addcart')->name('addcart');
Route::get('allcart/','CartController@allcart');
Route::get('deletecart/{rowId}','CartController@deletecart');
Route::post('updatecart/','CartController@updatecart')->name('updatecart');

//Customer Controller
Route::get('customerlogin/','CustomerController@login');
Route::get('checkout/','CustomerController@checkout');
Route::post('signup/','CustomerController@signup')->name('signup');


















//Backend Route.......................................................................................

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/allcat','CategoryController@allcat');

Route::get('/addcat','CategoryController@addcat');
Route::any('/storecat/','CategoryController@storecat')->name('storecat');

Route::get('/editcat/{id}','CategoryController@editcat');
Route::any('/updatecat','CategoryController@updatecat')->name('updatecat');
Route::get('/deletecat/{id}','CategoryController@deletecat');

//brands options
Route::get('/allbrand','BrandController@allbrand');
Route::get('/addbrand','BrandController@addbrand');
Route::any('/storebrand','BrandController@storebrand')->name('storebrand');
Route::get('/editbrand/{id}','BrandController@editbrand');
Route::any('/updatebrand','BrandController@updatebrand')->name('updatebrand');
Route::get('/deletebrand/{id}','BrandController@deletebrand');

//Product Options
Route::get('/allproduct','ProductController@allproduct');
Route::get('/addproduct','ProductController@addproduct');
Route::any('/storeproduct','ProductController@storeproduct')->name('storeproduct');
Route::get('/editproduct/{id}','ProductController@editproduct');
Route::any('/updateproduct','ProductController@updateproduct')->name('updateproduct');
Route::get('/deleteproduct/{id}','ProductController@deleteproduct');

//slider options
Route::get('/allslider','SliderController@allslider');
Route::get('/addslider','SliderController@addslider');
Route::any('/storeslider','SliderController@storeslider')->name('storeslider');
Route::get('/editslider/{id}','SliderController@editslider');
Route::any('/updateslider','SliderController@updateslider')->name('updateslider');
Route::get('/deleteslider/{id}','SliderController@deleteslider');



