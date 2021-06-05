<?php

use App\Http\Controllers\StoreController;
use App\Http\Controllers\ReviewController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/sweets','StoreController@store')->name('sweets.store');
Route::post('/sweets/{sweet}','ReviewController@show')->name('sweets.show');

//Image保存
Route::post('/sweets', 'ImagestoreController@store')->name('sweets.store');