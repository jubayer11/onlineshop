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



Route::get('/products','ApiProductController@index');
Route::get('/category','ApiProductController@category');
Route::get('/category/{id}','ApiProductController@onecategory');
Route::get('/tag','ApiProductController@tag');
Route::get('/tag/{id}','ApiProductController@onetag');
Route::Post('/like/{post}','LikeController@likeIt');
Route::delete('/like/{post}','LikeController@unlikeIt');


Route::apiResource('/post/{id}/comment','CommentController');

