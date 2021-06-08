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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/stores','StoreController@store')->name('stores.store');

Route::get('/reviews/create','ReviewController@create')->name('reviews.create');
Route::get('/reviews/{review}','ReviewController@show')->name('reviews.show');
