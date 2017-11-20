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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'pagecontroller@post')->name('post');
Route::get('/profile', 'pagecontroller@profile')->name('profile');
Route::get('/product', 'pagecontroller@product')-> name('product');
Route::get('/contact', 'pagecontroller@contact')-> name('contact');
Route::get('/about', 'pagecontroller@about')-> name('about');
Route::get('/deal', 'pagecontroller@deal')-> name('deal');
