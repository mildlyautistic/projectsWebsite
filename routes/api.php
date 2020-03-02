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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');
 */
/*Route::middleware('auth:api')->group( function () {
    Route::resource('profiles', 'API\ProfileController');
   // Route::get('/profile/show/{profileId}', 'API\ProfileController@show');
});*/
