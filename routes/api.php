<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');
Route::post('logout', 'API\RegisterController@logout');


Route::get('articles', 'API\ArticleController@get');

Route::middleware('auth:api')->group( function () {
    //Route::resource('articles', 'API\ArticleController');
    Route::post('create-article', 'API\ArticleController@store');

    Route::put('articles/{id}', 'API\ArticleController@update');
    
    Route::delete('articles/{id}', 'API\ArticleController@destroy');
});


Route::get('projects', 'API\ProjectController@get');

Route::middleware('auth:api')->group( function () {
    //Route::resource('projects', 'API\ProjectController');
    Route::post('create-project', 'API\ProjectController@store');

    Route::put('projects/{id}', 'API\ProjectController@update');

    Route::delete('projects/{id}', 'API\ProjectController@destroy');
    
});

Route::middleware('auth:api')->group( function () {
    Route::post('create-profile', 'API\ProfileController@store');


    Route::delete('profiles/{id}', 'API\ProfileController@delete');

});

Route::get('profiles', 'API\ProfileController@show');


//Route::get('assets','API\AssetController@index');

Route::middleware('auth:api')->group( function () {
    Route::resource('assets', 'API\AssetController');
});

//Route::post('register','API\RegisterController@register');
