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

Route::get('/', 'Index\IndexController@index')->name('index.index');

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

/*后台*/

/*后台首页*/
Route::get('admin', 'Admin\IndexController@index')->name('admin.index');
Route::get('admin/posts', 'Admin\PostController@index')->name('admin.posts');

Route::get('admin/users', 'Admin\UserController@index')->name('admin.users');
Route::get('admin/users/create', 'Admin\UserController@create')->name('admin.users.create');
Route::post('admin/users', 'Admin\UserController@store')->name('admin.users.store');
Route::get('admin/users/{user}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
Route::put('admin/users/{user}', 'Admin\UserController@update')->name('admin.users.update');
Route::delete('admin/users/{user}', 'Admin\UserController@destroy')->name('admin.users.destroy');
/*权限*/
Route::resource('admin/permissions', 'Admin\PermissionController');
/*角色*/
Route::resource('admin/roles', 'Admin\RoleController');

