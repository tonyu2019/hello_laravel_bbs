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

Route::get('/', 'Index\IndexController@index');

Auth::routes();

/*用户模块*/
Route::resource('users', 'Index\UserController')->only('show', 'edit', 'update');

/*帖子模块*/
Route::resource('posts', 'Index\PostController');
Route::post('upload_image', 'Index\PostController@uploadImage')->name('posts.upload_image');

/*分类模块*/
Route::resource('categories', 'Index\CategoryController')->only('show');
