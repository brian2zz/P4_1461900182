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

// Route::get('/', function () {
//     return view('buku0182');
// });

Route::get('/','App\Http\Controllers\PrakController@buku')->name('buku');
Route::get('/user','App\Http\Controllers\PrakController@user')->name('user');
Route::get('/export','App\Http\Controllers\PrakController@export')->name('export');
