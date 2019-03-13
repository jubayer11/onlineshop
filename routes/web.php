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



Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', 'AdminHomeController@index');
//routes for admin


Route::get('/admin/home','AdminHomeController@index')->name('admin.home');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('/admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset','Admin\ResetPasswordController@reset')->name('admin.password.update');
Route::get('/admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


Route::resource('super/admin','SuperAdminAdminController',['names'=>
    [
        'index'=>'super.admin.index',
        'create'=>'super.admin.create',
        'store'=>'super.admin.store',
        'edit'=>'super.admin.edit'

    ]]);

//route for dashboard
Route::get('super/dashboard','DashboardController@dashboard')->name('super.dashboard');
Route::get('super/icons','DashboardController@icons')->name('super.icons');
Route::get('super/maps','DashboardController@maps')->name('super.maps');
Route::get('super/notifications','DashboardController@notifications')->name('super.notifications');
Route::get('super/table','DashboardController@table')->name('super.table');
Route::get('super/template','DashboardController@template')->name('super.template');
Route::get('super/typography','DashboardController@typography')->name('super.typography');
Route::get('super/upgrade','DashboardController@upgrade')->name('super.upgrade');
Route::get('super/user','DashboardController@user')->name('super.user');
Route::get('admin/profile/update/{id}','DashboardController@profile')->name('admin.profile.update');

Route::put('admin/profile/edit/{id}','DashboardController@profileEdit')->name('admin.profile.edit');

//front end dailyshop
Route::get('dailyshop/index','VisitOnlineshopController@index')->name('dailyshop.index');
Route::get('dailyshop/nopage','VisitOnlineshopController@nopage')->name('dailyshop.nopage');
Route::get('dailyshop/account','VisitOnlineshopController@account')->name('dailyshop.account');
Route::get('dailyshop/blog-archive-2','VisitOnlineshopController@blogArchive')->name('dailyshop.blogArchive');
Route::get('dailyshop/blog-single','VisitOnlineshopController@blogSingle')->name('dailyshop.blogSingle');
Route::get('dailyshop/cart','VisitOnlineshopController@cart')->name('dailyshop.cart');
Route::get('dailyshop/checkout','VisitOnlineshopController@checkout')->name('dailyshop.checkout');
Route::get('dailyshop/contact','VisitOnlineshopController@contact')->name('dailyshop.contact');
Route::get('dailyshop/product','VisitOnlineshopController@product')->name('dailyshop.product');
Route::get('dailyshop/product-detail','VisitOnlineshopController@productDetail')->name('dailyshop.productDetail');
Route::get('dailyshop/wishlist','VisitOnlineshopController@wishlist')->name('dailyshop.wishlist');

