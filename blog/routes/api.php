<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function () {
    Route::get('/contact', 'PagesController@getContact');
    Route::get('/about', 'PagesController@getAbout');
    Route::get('/', 'PagesController@getIndex');
    Route::resource('/posts', 'PostController');
});