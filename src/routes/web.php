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

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'MieProject\Files\Controllers','as'=>'admin.','middleware'=>'web'], function() {
    // Files Route
    Route::get(config('uidashboard.url.prefix').'/files', 'FileController@dash_index')->name('files');
    Route::get(config('uidashboard.url.prefix').'/files/create', 'FileController@dash_create')->name('files.create');
//    Route::post(config('uidashboard.url.prefix').'/files', 'FileController@store')->name('files.store');
});