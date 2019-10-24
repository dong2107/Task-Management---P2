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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('index');
    });
    Route::get('create', 'HomeController@create')->name('create');
    Route::post('add', 'HomeController@add')->name('add');
    Route::get('show/{id}', 'HomeController@show')->name('show');
    Route::get('delete/{id}', 'HomeController@delete')->name('delete');
    Route::post('store', function () {
    });
    Route::get('{id}/show', function () {
    });
    Route::get('{id}/edit', function () {
    });
    Route::patch('{id}/update', function () {
    });
    Route::delete('{id}', function () {
    });
});
