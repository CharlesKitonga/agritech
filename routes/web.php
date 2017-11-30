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
    return view('auth.login');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PageController@post')->name('post');

Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/product', 'PageController@product')-> name('product');

Route::get('/contact', 'PageController@contact')-> name('contact');
Route::get('/about', 'PageController@about')-> name('about');

Route::get('/deal', 'PageController@deal')-> name('deal');
Route::get('/users', 'PageController@index')-> name('user');

Route::get('/usersregister', 'PageController@register')-> name('usersregister');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
    Route::get('/',function (){
        return view('admin.index');
    })->name('admin.index');

    Route::get('/admin', 'UploadController@index');

    Route::get('/Addp', 'AddpController@index')->name('Addp.create');
    
	Route::post('/', 'AddpController@post')->name("post_data");
    
	Route::get('/public/{path}', 'AddpController@download');

    });

 Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);
 Route::resource('cart', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
 //Route::resource('cart', 'CartController');

 Route::delete('emptyCart', 'CartController@emptyCart');
 Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');
 Route::resource('wishlist', 'WishlistController');

 Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
 Route::post('switchToCart/{id}', 'WishlistController@switchToCart');
<<<<<<< HEAD
=======

Route::get('image-upload','AddpController@imageUpload');
Route::post('image-upload','AddpController@imageUploadPost');

>>>>>>> master







