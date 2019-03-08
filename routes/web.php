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

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


//routes for admin


Route::get('/admin/home','AdminHomeController@index')->name('admin.home');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('/admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset','Admin\ResetPasswordController@reset')->name('admin.password.update');
Route::get('/admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

//for different admin
Route::resource('super/admin','SuperAdminAdminController',['names'=>
[
       'index'=>'super.admin.index',
       'create'=>'super.admin.create',
       'store'=>'super.admin.store',
       'edit'=>'super.admin.edit'

]]);
