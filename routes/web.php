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
Route::get('/welcome', function () {
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

Route::get('/show-articles',function() {
    return view('articles', ['articles' => App\Article::latest()->get()]);
});
Route::get('/show-articles/{article}','API\ArticleController@show');

Route::get('/show-profiles',function() {
    return view('profiles', ['profiles' => App\Profile::latest()->get()]);
});
Route::get('/show-profiles/{profile}','API\ProfileController@show');

Route::get('/show-projects',function() {
    return view('projects', ['projects' => App\Project::latest()->get()]);
});
Route::get('/show-projects/{project}','API\ProjectController@show');

/*Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('/register', 'API\RegisterController@register');
    Route::post('login', 'API\RegisterController@login');
    Route::post('logout', 'API\RegisterController@logout');
});*/

Route::get('{any}', function () {
    return view('wel');
})->where('any', '.*');

Route::get('/contact','API\ContactController@create');
Route::post('/contact','API\ContactController@store');

