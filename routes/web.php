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
Route::get('/', 'LoginController@index')->name('login.index');
Route::post('/', 'LoginController@verify')->name('login.verify');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/admin/home', 'HomeController@admin')->name('home.admin');
Route::get('/admin/emplist', 'HomeController@emplist')->name('home.emplist');
Route::get('/admin/search', 'HomeController@search')->name('home.search');
Route::get('/admin/create', 'HomeController@create')->name('home.create');
Route::post('/admin/create', 'HomeController@created');
Route::get('/admin/emplist/delete/{id}', 'HomeController@delete')->name('home.delete');
Route::get('/admin/emplist/update/{id}', 'HomeController@update')->name('home.update');
Route::post('/admin/emplist/update/{id}', 'HomeController@updated');


Route::get('/employee/home', 'HomeController@employee')->name('home.employee');
Route::get('/employee/productlist', 'HomeController@product')->name('home.product');
Route::get('/employee/newProduct', 'HomeController@newproduct')->name('home.newproduct');
Route::post('/employee/newProduct', 'HomeController@newproduct_store')->name('home.newproduct_store');



Route::get('/logout', 'LogoutController@index')->name('logout.index');
