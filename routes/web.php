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

Route::resource('/stores','StoreController');
Route::resource('/reviews','ReviewController');

Route::get('/sweets', 'StoreController@index')->name('sweets.index');

// Route::delete('/reviews/{review}/','ReviewController@destroy')->name('reviews.destroy');

Route::post('/favorites', 'FavoriteController@store')->name('favorites.store');
// Route::delete('/favorites/{favorite}/destroy', 'FavoriteController@destroy')->name('favorites.destroy');

// マイページのRoute
Route::get('/mypages', 'ReviewController@myreview')->name('reviews.myreview');

