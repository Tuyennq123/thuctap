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

Route::get('gold', function () {
    return view('gold');
});

Route::get('demo1', function () {
    return view('demo1');
});

Route::get('demo2', function () {
    return view('demo2');
});

// Route::get('/tablee', function () {
//     return view('tablee');

Route::get('gold', 'goldController@index')->name('gold');
