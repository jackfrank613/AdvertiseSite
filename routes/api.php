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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/signup','CreatUserController@createuser');



Route::post('signup','Api\AuthController@CreateUser');
Route::post('login','Api\AuthController@LoginUser');

Route::post('statesearch','Api\SearchController@stateSearch');
