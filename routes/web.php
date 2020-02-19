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

Route::get('/about', function () {
    $article = App\Article::take(3)->latest()->get();


    return view('about', [
        'article' => $article]);

});

Route::get('/article', 'ArticleController@index')->name('article.index');
Route::post('/article','ArticleController@store');
Route::get('/article/create','ArticleController@create');
Route::get('/article/{article}','ArticleController@show')->name('article.show');
Route::get('/article/{article}/edit','ArticleController@edit');
Route::put('/article/{article}','ArticleController@update');
