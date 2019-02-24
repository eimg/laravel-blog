<?php

# Post Routes
Route::get('/posts', 'PostController@index');
Route::get('/', 'PostController@index');
Route::get('/home', 'PostController@index');
Route::get('/posts/view/{id}', 'PostController@view');
Route::get('/posts/add', 'PostController@add');
Route::post('/posts/add', 'PostController@create');
Route::get('/posts/edit/{id}', 'PostController@edit');
Route::post('/posts/edit/{id}', 'PostController@update');
Route::get('/posts/delete/{id}', 'PostController@delete');

# Category Routes
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/add', 'CategoryController@add');
Route::post('/categories/add', 'CategoryController@create');
Route::get('/categories/edit/{id}', 'CategoryController@edit');
Route::post('/categories/edit/{id}', 'CategoryController@update');
Route::get('/categories/delete/{id}', 'CategoryController@delete');

# Comment Routes
Route::post('/comments/add', 'CommentController@create');
Route::get('/comments/delete/{id}', 'CommentController@delete');

Auth::routes();
