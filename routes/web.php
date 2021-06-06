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

Route::get('/sweets','StoreController@store')->name('sweets.store');
Route::get('/sweets/{sweet}','ReviewController@show')->name('sweets.show');

//Image保存(画像系はあとで修正します)
// Route::get('/image_input','ImagestoreController@getImageInput');
// Route::post('/image_confirm','ImagestoreController@postImageConfirm');
// Route::post('/image_complete','ImagestoreController@postImageComplete');