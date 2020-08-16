<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
// USER
Route::get('/user', 'UserController@index');
Route::get('/user/show', 'HomeController@show');
Route::get('/user/create', 'HomeController@create');
Route::post('/user/store', 'HomeController@store');
Route::get('/user/edit/{id}', 'HomeController@edit');
Route::post('/user/update/{id}', 'HomeController@update');
Route::get('/user/delete/{id}', 'UserController@delete');
// POST
Route::get('/post', 'UserController@index');
Route::get('/post/show', 'HomeController@show');
Route::get('/post/create', 'HomeController@create');
Route::post('/post/store', 'HomeController@store');
Route::get('/post/edit/{id}', 'HomeController@edit');
Route::post('/post/update/{id}', 'HomeController@update');
Route::get('/post/delete/{id}', 'UserController@delete');
// Category
Route::get('/category', 'UserController@index');
Route::get('/category/show', 'HomeController@show');
Route::get('/category/create', 'HomeController@create');
Route::post('/category/store', 'HomeController@store');
Route::get('/category/edit/{id}', 'HomeController@edit');
Route::post('/category/update/{id}', 'HomeController@update');
Route::get('/category/delete/{id}', 'UserController@delete');
