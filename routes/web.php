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

//for Admin
Route::get('super/user','DashboardController@user')->name('super.user');
Route::get('admin/profile/update/{id}','DashboardController@profile')->name('admin.profile.update');
Route::put('admin/profile/edit/{id}','DashboardController@profileEdit')->name('admin.profile.edit');
//for Product

Route::resource('product','ProductsController',['names'=>
    [
        'index'=>'product.index',
        'create'=>'product.create',
        'store'=>'product.store',
        'edit'=>'product.edit'


    ]]);

//for Post
Route::resource('post','PostsController',['name'=>
[
    'index'=>'post.index',
    'create'=>'post.create',
    'store'=>'post.store',
    'edit'=>'post.edit'

]]);
//for category in product
Route::get('product/category/{id}','ProductsController@category')->name('product.category');
Route::post('product/category/{category_id}/{product_id}','ProductsController@categorydetach')->name('product.category.delete');
Route::put('product/category/update/{id}','ProductsController@categoryproduct')->name('product.category.update');


//for sub_category in product
Route::get('product/sub_category/{id}','ProductsController@sub_category')->name('product.sub_category');
Route::post('product/sub_category/{sub_category_id}/{product_id}','ProductsController@sub_categorydetach')->name('product.sub_category.delete');
Route::put('product/sub_category/update/{id}','ProductsController@sub_categoryproduct')->name('product.sub_category.update');

//for tag in product

Route::get('product/tag/{id}','ProductsController@tag')->name('product.tag');
Route::post('product/tag/{tag_id}/{product_id}','ProductsController@tagdetach')->name('product.tag.delete');
Route::put('product/tag/update/{id}','ProductsController@tagproduct')->name('product.tag.update');

//quickview in product
Route::get('product/quick_view/{id}','VisitOnlineshopController@quickview')->name('product.quick_view');


//
//for tag in post

Route::get('post/tag/{id}','PostsController@tag')->name('post.tag');
Route::post('post/tag/{tag_id}/{post_id}','PostsController@tagdetach')->name('post.tag.delete');
Route::put('post/tag/update/{id}','PostsController@tagpost')->name('post.tag.update');
//for color in post

Route::get('product/color/{id}','ProductsController@color')->name('product.color');
Route::post('product/color/{color_id}/{product_id}','ProductsController@colordetach')->name('product.color.delete');
Route::put('product/color/update/{id}','ProductsController@colorproduct')->name('product.color.update');
//for size in post
Route::get('product/size/{id}','ProductsController@size')->name('product.size');
Route::post('product/size/{size_id}/{product_id}','ProductsController@sizedetach')->name('product.size.delete');
Route::put('product/size/update/{id}','ProductsController@sizeproduct')->name('product.size.update');

//for category
Route::get('category/index','ProductCategoryController@index')->name('category.index');
Route::post('category/store','ProductCategoryController@store')->name('category.store');
Route::get('category/create','ProductCategoryController@create')->name('category.create');
Route::get('category/edit/{id}','ProductCategoryController@edit')->name('category.edit');
Route::delete('category/destroy/{id}','ProductCategoryController@destroy')->name('category.destroy');
Route::put('category/update/{id}','ProductCategoryController@update')->name('category.update');

//for sub_category
Route::get('sub_category/index','SubCategoryController@index')->name('sub_category.index');
Route::post('sub_category/store','SubCategoryController@store')->name('sub_category.store');
Route::get('sub_category/create','SubCategoryController@create')->name('sub_category.create');
Route::get('sub_category/edit/{id}','SubCategoryController@edit')->name('sub_category.edit');
Route::delete('sub_category/destroy/{id}','SubCategoryController@destroy')->name('sub_category.destroy');
Route::put('sub_category/update/{id}','SubCategoryController@update')->name('sub_category.update');

//for tags
Route::get('tag/index','ProductsTagController@index')->name('tag.index');
Route::post('tag/store','ProductsTagController@store')->name('tag.store');
Route::get('tag/create','ProductsTagController@create')->name('tag.create');
Route::get('tag/edit/{id}','ProductsTagController@edit')->name('tag.edit');
Route::delete('tag/destroy/{id}','ProductsTagController@destroy')->name('tag.destroy');
Route::put('tag/update/{id}','ProductsTagController@update')->name('tag.update');

//for size
Route::get('size/index','ProductSizeController@index')->name('size.index');
Route::post('size/store','ProductSizeController@store')->name('size.store');
Route::get('size/create','ProductSizeController@create')->name('size.create');
Route::get('size/edit/{id}','ProductSizeController@edit')->name('size.edit');
Route::delete('size/destroy/{id}','ProductSizeController@destroy')->name('size.destroy');
Route::put('size/update/{id}','ProductSizeController@update')->name('size.update');

//for color
Route::get('color/index','ProductColorController@index')->name('color.index');
Route::post('color/store','ProductColorController@store')->name('color.store');
Route::get('color/create','ProductColorController@create')->name('color.create');
Route::get('color/edit/{id}','ProductColorController@edit')->name('color.edit');
Route::delete('color/destroy/{id}','ProductColorController@destroy')->name('color.destroy');
Route::put('color/update/{id}','ProductColorController@update')->name('color.update');


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


//for product category in daiylyshop
Route::get('dailyshop/product/category/{id}','VisitOnlineshopController@index2')->name('dailyshop.index.category');



//for carousel


Route::resource('dailyshop/carousel','CarouselController',['name'=>
[
    'index'=>'carousel.index',
    'edit'=>'carousel.edit',
    'create'=>'carousel.edit',
    'store'=>'carousel.edit'
]]);

//for secondCarousel

Route::get('dailyshop/second_carousel','CarouselController@second_index')->name('second_carousel.index');
Route::post('dailyshop/second_carousel/store','CarouselController@second_store')->name('second_carousel.store');
Route::get('dailyshop/second_carousel/create','CarouselController@second_create')->name('second_carousel.create');
Route::get('dailyshop/second_carousel/edit/{id}','CarouselController@second_edit')->name('second_carousel.edit');
Route::delete('dailyshop/second_carousel/destroy/{id}','CarouselController@second_destroy')->name('second_carousel.destroy');
Route::put('dailyshop/second_carousel/update/{id}','CarouselController@second_update')->name('second_carousel.update');
