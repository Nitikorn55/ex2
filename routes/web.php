<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
// USER
Route::get('/user', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');
// POST
Route::get('/post', 'PostController@index');
Route::get('/post/show/{id}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update/{id}', 'PostController@update');
Route::get('/post/delete/{id}', 'PostController@delete');
// Category
Route::get('/category', 'CategoryController@index');
Route::get('/category/show/{id}', 'CategoryController@show');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/update/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete');


