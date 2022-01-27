<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@home')->name('home');
// Route::get('/dashboard', 'HomeController@home');

// KategoriProduk

Route::resource('/category', 'CategoryController');
Route::resource('/tag', 'TagController');
Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
Route::resource('/post', 'PostController');
Route::resource('/user', 'UserController');
Route::resource('/kategori-produk', 'KategoriProdukController');
Route::resource('/produk', 'ProdukController');
Route::get('/', 'DashboardController@index');
Route::get('/shop', 'DashboardController@shop');
Route::get('/shop/{id}', 'DashboardController@shopdetail');
Route::get('/shop/kategori/{id}', 'DashboardController@shopkategori');
Route::get('/cari','DashboardController@cari')->name('cari');
Route::get('/contact','DashboardController@kontak');
Route::get('/about','DashboardController@about');
// Route::get('/artikel', 'DashboardController@berita');
// Route::get('/artikel/{slug}', 'DashboardController@beritadetail');
// Route::get('/artikel/{slug}', 'DashboardController@artikel');
// Route::get('/artikel/{slug}', 'DashboardController@artikel');

// Route::get('/produk', 'ProdukController');
