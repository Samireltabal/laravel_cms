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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::post('/AddComment', ['as' => 'addComment', 'uses' => 'PostsController@comment']);
Route::post('/deleteComment', ['as' => 'deleteComment', 'uses' => 'PostsController@destroy_comment']);
Route::resource('posts', 'PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');
