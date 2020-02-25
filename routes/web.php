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

//Route::resource('/articles/show}', 'API\ArticleController');


Route::get('/articles', 'API\ArticleController@index')->name('articles.index');
Route::post('/articles','API\ArticleController@store');
Route::get('/articles/create','API\ArticleController@create');
Route::get('/articles/{articles}','API\ArticleController@show')->name('articles.show');
Route::get('/articles/{articles}/edit','API\ArticleController@edit');
Route::put('/articles/{articles}','API\ArticleController@update');
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
