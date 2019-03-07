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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//homepage route
Route::match(['get', 'post '],'/', 'IndexController@index');
Route::match(['get', 'post '],'/cart', 'IndexController@Cart');
Route::match(['get', 'post '],'/checkout', 'IndexController@Checkout');
Route::match(['get', 'post '],'/details', 'IndexController@Details');
Route::match(['get', 'post '],'/shop', 'IndexController@Shop');

// Product Modal popup
Route::get('/product/{id}','ProductsController@product');

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/admin','AdminController@login');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/admin/dashboard','AdminController@dashboard');	
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
	Route::match(['get', 'post'],'/admin/update-pwd','AdminController@updatePassword');

	// Admin Categories Routes
	Route::match(['get', 'post'], '/admin/add-category','CategoryController@addCategory');
	Route::match(['get', 'post'], '/admin/edit-category/{id}','CategoryController@editCategory');
	Route::match(['get', 'post'], '/admin/delete-category/{id}','CategoryController@deleteCategory');
	Route::get('/admin/view-categories','CategoryController@viewCategories');

	// Admin Products Routes
	Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
	Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
	Route::get('/admin/delete-product/{id}','ProductsController@deleteProduct');
	Route::get('/admin/view-products','ProductsController@viewProducts');
	Route::get('/admin/delete-product-image/{id}','ProductsController@deleteProductImage');
	
	Route::match(['get', 'post'], '/admin/add-images/{id}','ProductsController@addImages');
	Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteProductAltImage');

	// Admin Attributes Routes
	Route::match(['get', 'post'], '/admin/add-attributes/{id}','ProductsController@addAttributes');
	Route::match(['get', 'post'], '/admin/edit-attributes/{id}','ProductsController@editAttributes');
	Route::get('/admin/delete-attribute/{id}','ProductsController@deleteAttribute');

});