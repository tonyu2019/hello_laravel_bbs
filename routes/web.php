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
Route::resource('posts', 'Index\PostController',  ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('posts/{slug}', 'Index\PostController@show')->name('posts.show');
Route::post('upload_image', 'Index\PostController@uploadImage')->name('posts.upload_image');

/*分类模块*/
Route::resource('categories', 'Index\CategoryController')->only('show');

/*回复模块*/
Route::resource('replies', 'Index\ReplyController', ['only'=>['store', 'destroy']]);
//通知控制器
Route::resource('notifications', 'Index\NotificationsController', ['only' => ['index']]);
