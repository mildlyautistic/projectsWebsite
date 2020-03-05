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

Route::get('/projects','API\ProjectController@index');

Route::get('/articles','API\ArticleController@index');

Route::get('/register','API\RegisterController@get');

Route::get('/profiles','API\ProfileController@index');


Route::get('/contact','API\ContactController@create');
Route::post('/contact','API\ContactController@store');

