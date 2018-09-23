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

Route::get('/', 'HomeController@index')->name('mainpage');
Route::get('/news/{slug}', 'HomeController@show')->name('news.show');
Route::get('/news', 'HomeController@news')->name('news.lists');
Route::get('/tag/{slug}', 'HomeController@tag')->name('tag.show');
Route::get('category/{slug}', 'HomeController@category')->name('category.show');
Route::get('/register', 'AuthController@registerForm');
Route::post('register', 'AuthController@register');
Route::get('/login', 'AuthController@loginForm');
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@index')->name('index') ;
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/posts', 'PostsController');
});