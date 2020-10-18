<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

// Rutas admin
Route::middleware('auth')->namespace('admin')->prefix('dashboard')->group(function () {
    Route::get('/', 'adminController@index')->name('admin');
    //posts
    Route::resource('posts', 'PostsController',['as'=>'admin']);
    Route::delete('posts/{image}/image/destroy','PostsImagesController@destroy')->name('admin.posts.images.destroy')->middleware('permission:posts.images.index');
    Route::get('posts/img/{post}', 'PostsImagesController@index')->name('admin.posts.images');
    Route::post('posts/{post}/images', 'PostsImagesController@store')->name('admin.posts.images.store');

    //users
    Route::resource('users', 'UsersController', ['except'=>'show','as' => 'admin']);

    //permissions
    Route::get('permissions', 'PermissionsController@index')->name('admin.permissions')->middleware('permission:permissions.index');
    Route::get('permissions/{permission}/edit', 'PermissionsController@edit')->name('admin.permissions.edit')->middleware('permission:permissions.update');
    Route::put('permissions/{permission}', 'PermissionsController@update')->name('admin.permissions.update')->middleware('permission:permissions.update');
    
    //roles
    Route::resource('roles', 'RolesController',['as'=>'admin']);

});
//login
Auth::routes(['register' => false, 'reset' => false, 'confirm' => false, 'verify' => false]);


//Rutas frontend
Route::get('/{any}',function(){
    return view('home');
})->where('any','.*');
