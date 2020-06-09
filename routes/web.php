<?php

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

Route::get('/', 'HomeController@home')->name('welcome');
Route::post('/create-request', 'Admin\RequestController@create')->name('create-request');

Auth::routes(['register' => false]);

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'Admin\HomeController@index')->name('home');
    Route::get('/requests', 'Admin\RequestController@index')->name('requests');

    Route::resource('events', 'Admin\EventController');
});
