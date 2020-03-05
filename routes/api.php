<?php

use Illuminate\Http\Request;


Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');


Route::get('articles', 'API\ArticleController@get');

Route::delete('articles/{id}', 'API\ArticleController@destroy');

Route::middleware('auth:api')->group( function () {
    //Route::resource('articles', 'API\ArticleController');
    Route::post('articles', 'API\ArticleController@store');

    Route::put('articles/{id}', 'API\ArticleController@update');
});


Route::get('projects', 'API\ProjectController@get');

Route::delete('projects/{id}', 'API\ProjectController@destroy');

Route::middleware('auth:api')->group( function () {
    //Route::resource('projects', 'API\ProjectController');
    Route::post('projects', 'API\ProjectController@store');

    Route::put('projects/{id}', 'API\ProjectController@update');
});

Route::middleware('auth:api')->group( function () {
    Route::resource('assets', 'API\AssetController');
});

Route::middleware('auth:api')->group( function () {
    Route::post('profiles', 'API\ProfileController@store');


    Route::delete('profiles/{id}', 'API\ProfileController@delete');

});

Route::get('profiles', 'API\ProfileController@show');

Route::middleware('auth:api')->group( function () {
    //Route::resource('projects', 'API\ProjectController');
Route::post('projects', 'API\ProjectController@store');
});



Route::middleware('auth:api')->group( function () {
    Route::resource('assets', 'API\AssetController');
});

Route::post('register','API\RegisterController@register');
