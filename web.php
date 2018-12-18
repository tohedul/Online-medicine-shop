<?php


//Login
Route::get('/', 'LoginController@index')->name('login.index');
Route::post('/', 'LoginController@verify')->name('login.verify');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

//Register
Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@register')->name('register.register');


//Admin

Route::get('/admin/home', 'HomeController@admin')->name('home.admin');
Route::get('/admin/emplist', 'HomeController@emplist')->name('home.emplist');
Route::get('/admin/search', 'HomeController@search')->name('home.search');
Route::get('/admin/create', 'HomeController@create')->name('home.create');
Route::post('/admin/create', 'HomeController@created');
Route::get('/admin/emplist/delete/{id}', 'HomeController@delete')->name('home.delete');
Route::get('/admin/emplist/update/{id}', 'HomeController@update')->name('home.update');
Route::post('/admin/emplist/update/{id}', 'HomeController@updated');


Route::get('/customer/home', 'HomeController@customer')->name('home.customer');
Route::get('/customer/productlist', 'HomeController@product')->name('home.product');
Route::post('/customer/productlist', 'HomeController@productadd');

Route::get('/admin/productlist', 'HomeController@productadmin')->name('home.productadmin');
Route::get('/admin/newProduct', 'HomeController@newproduct')->name('home.newproduct');
Route::post('/admin/newProduct', 'HomeController@newproduct_store')->name('home.newproduct_store');


//profile
Route::get('/customer/upload/', 'HomeController@upload')->name('home.upload');
Route::post('/customer/upload/', 'HomeController@storePhoto');
Route::get('/customer/profile/', 'HomeController@profile')->name('home.profile');
Route::post('/customer/profile/', 'HomeController@profileupdate')->name('home.profileupdate');

//Cart
Route::get('/customer/cart', 'HomeController@cart')->name('home.cart');
Route::post('/customer/cart', 'HomeController@purchase');


Route::get('/logout', 'LogoutController@index')->name('logout.index');
