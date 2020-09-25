<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::namespace('admin')->prefix('admin')->group(function () {
    Route::get('/', 'adminController@index');
    Route::get('posts', 'PostsController@index');
});
// Rutas admin
Route::middleware('auth')->namespace('admin')->prefix('dashboard')->group(function () {
    //posts
    Route::get('/', 'adminController@index')->name('admin');
    Route::get('posts', 'PostsController@index')->name('admin.posts')->middleware('permission:posts.index');
    Route::get('posts/create', 'PostsController@create')->name('admin.posts.create')->middleware('permission:posts.create');
    Route::post('posts', 'PostsController@store')->name('admin.posts.store');
    Route::get('posts/edit/{post}', 'PostsController@edit')->name('admin.posts.edit')->middleware('permission:posts.update');
    Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update')->middleware('permission:posts.update');
    Route::delete('posts/{post}', 'PostsController@destroy')->name('admin.posts.destroy')->middleware('permission:posts.destroy');
    Route::delete('posts/{image}/image/destroy','PostsImagesController@destroy')->name('admin.posts.images.destroy');
    Route::get('posts/img/{post}', 'PostsImagesController@index')->name('admin.posts.images')->middleware('permission:posts.images.index');
    Route::post('posts/{post}/images', 'PostsImagesController@store')->name('admin.posts.images.store');
    //users
    Route::get('users', 'UsersController@index')->name('admin.users')->middleware('permission:users.index');
    Route::get('users/create', 'UsersController@create')->name('admin.users.create')->middleware('permission:users.create');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('admin.users.edit')->middleware('permission:users.update');
    Route::put('users/{user}', 'UsersController@update')->name('admin.users.update')->middleware('permission:users.update');
    Route::delete('users/{user}', 'UsersController@destroy')->name('admin.users.destroy')->middleware('permission:users.destroy');;
    Route::post('users', 'UsersController@store')->name('admin.users.store');
    //permissions
    Route::get('permissions', 'PermissionsController@index')->name('admin.permissions')->middleware('permission:permissions.index');
    Route::get('permissions/{permission}/edit', 'PermissionsController@edit')->name('admin.permissions.edit')->middleware('permission:permissions.update');
    Route::put('permissions/{permission}', 'PermissionsController@update')->name('admin.permissions.update')->middleware('permission:permissions.update');
    //roles
    Route::get('roles', 'RolesController@index')->name('admin.roles')->middleware('permission:roles.index');
    Route::get('roles/create', 'RolesController@create')->name('admin.roles.create')->middleware('permission:roles.create');
    Route::get('roles/{role}/show', 'RolesController@show')->name('admin.roles.show')->middleware('permission:roles.show');
    Route::post('roles', 'RolesController@store')->name('admin.roles.store');
    Route::get('roles/{role}/edit', 'RolesController@edit')->name('admin.roles.edit')->middleware('permission:roles.update');
    Route::put('roles/{role}', 'RolesController@update')->name('admin.roles.update')->middleware('permission:roles.update');
    Route::delete('roles/{role}', 'RolesController@destroy')->name('admin.roles.destroy')->middleware('permission:roles.destroy');
});

Auth::routes(['register' => false, 'reset' => false, 'confirm' => false, 'verify' => false]);

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('admin');
    } else {
        return redirect('/login');
    }
});
