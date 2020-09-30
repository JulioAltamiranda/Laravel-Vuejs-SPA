<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 
Route::get('posts','api\PostsController@index');
Route::get('posts/latest','api\PostsController@latest');
Route::get('posts/authors','api\PostsController@authors');
Route::get('posts/{id}','api\PostsController@show');
Route::get('categories','api\CategoriesController@index');
Route::get('categories/posts/{id}','api\CategoriesController@posts');
Route::get('tags','api\TagsController@index');
Route::get('tags/posts/{id}','api\TagsController@posts');
