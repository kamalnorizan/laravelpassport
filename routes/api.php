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

Route::group(['prefix' => 'auth'], function () {
    Route::post('register', 'Auth\PassportAuthController@register');
    Route::post('login', 'Auth\PassportAuthController@login');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout','Auth\PassportAuthController@logout');
        Route::get('users','Auth\PassportAuthController@users');
    });
});
