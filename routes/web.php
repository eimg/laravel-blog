<?php

Route::get('/posts', 'PostController@index');
Route::get('/', 'PostController@index');
Route::get('/home', 'PostController@index');

Route::get('/posts/view/{id}', 'PostController@view');

Route::get('/posts/add', 'PostController@add');
Route::post('/posts/add', 'PostController@create');

Route::get('/posts/delete/{id}', 'PostController@delete');

Auth::routes();
