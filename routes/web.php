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


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // 追記
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); // 追
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create','Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('/', 'NewsController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
