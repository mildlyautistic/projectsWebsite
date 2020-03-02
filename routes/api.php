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

Route::middleware('auth:api')->group( function () {
    Route::resource('articles', 'API\ArticleController');
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
Route::middleware('auth:api')->group( function () {
    Route::post('profiles', 'API\ProfileController@store');

//Route::put('profiles/{id}','API\ProfileController@update');

    Route::delete('profiles/{id}', 'API\ProfileController@delete');
});
Route::get('profiles', 'API\ProfileController@show');

Route::middleware('auth:api')->group( function () {
    //Route::resource('projects', 'API\ProjectController');
Route::post('projects', 'API\ProjectController@store');
});
//Route::post('projects', 'API\ProjectController@store');


Route::middleware('auth:api')->group( function () {
    Route::resource('assets', 'API\AssetController');
});
