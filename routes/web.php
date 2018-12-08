<?php


Auth::routes();

// Запрещаем доступ не зарегестрированных пользователей ['middleware'=>'auth']
Route::group(['middleware'=>'auth'], function (){
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    Route::resource('/admin/products', 'ProductController');
    // разрешаем методы для публичной части
    Route::resource('/admin/posts', 'PostController')->except(['index', 'show']);
});

// Роут с динамическим параметром
Route::get('/posts/{slug}', 'PostController@show')->name('post.show');
// Роут с выводом всех постов
Route::get('/posts', 'PostController@index')->name('post.index');