<?php


Auth::routes();

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::resource('/admin/products', 'ProductController');