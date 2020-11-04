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

Route::group([
    'middleware' => 'api'
], function ($router) {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('user-profile', 'App\Http\Controllers\AuthController@userProfile');
    Route::get('addresses','App\Http\Controllers\AddressController@getAddresses');
    Route::get('posts','App\Http\Controllers\PostController@getPosts');
    Route::post('add-post','App\Http\Controllers\PostController@addPost');
    Route::post('edit-post','App\Http\Controllers\PostController@editPost');
    Route::delete('delete-post/{id}','App\Http\Controllers\PostController@deletePost');

});

