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

Route::get('/admin/{name?}/{name2?}/{name3?}/{name4?}', 'IndexController@admin');

Route::get('/', 'IndexController@index')->name('home');
