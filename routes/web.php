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

Route::get('/', function () {
    return view('welcome');
});

Route::get('image', 'ImageTextController@index')->name('image');
Route::post('image-postcard1', 'ImageTextController@imagePostcard1')->name('image.postcard1');
Route::post('image-postcard2', 'ImageTextController@imagePostcard2')->name('image.postcard2');
Route::post('image-postcard3', 'ImageTextController@imagePostcard3')->name('image.postcard3');
