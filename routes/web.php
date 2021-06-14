<?php


use App\Http\Controllers\ReviewController;
use App\Review;
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

// 検索機能（ビューの検索フォームのactionに入れるルート）
Route::get('/stores', 'StoreController@search')->name('stores.search');

// Route::get('/stores', 'StoreController@index')->name('stores.index');
// Route::get('/stores/{store}', 'StoreController@show')->name('stores.show');

// Route::get('/reviews/create','ReviewController@create')->name('reviews.create');
// Route::get('/reviews/{review}','ReviewController@show')->name('reviews.show');

// Route::delete('/reviews/{review}/','ReviewController@destroy')->name('reviews.destroy');

Route::post('/favorites', 'FavoriteController@store')->name('favorites.store');
// Route::delete('/favorites/{favorite}/destroy', 'FavoriteController@destroy')->name('favorites.destroy');

// マイページのRoute
Route::get('/mypages', 'ReviewController@myreview')->name('reviews.myreview');
