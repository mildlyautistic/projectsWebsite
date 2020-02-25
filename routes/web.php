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

//Route::resource('/profile/show/{profileId}', 'API\ProfileController');


Route::get('/article', 'API\ArticleController@index')->name('article.index');
Route::post('/article','API\ArticleController@store');
Route::get('/article/create','API\ArticleController@create');
Route::get('/article/{article}','API\ArticleController@show')->name('article.show');
Route::get('/article/{article}/edit','API\ArticleController@edit');
Route::put('/article/{article}','API\ArticleController@update');
//Route::resource('/profile/show/{profileId}', 'API\ProfileController');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/press', function () {
    return view('press');
});
Route::get('/impressum', function () {
    return view('impressum');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});
