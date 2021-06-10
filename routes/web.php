<?php

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('home');

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


// Frontend
Route::get('/', 'Blog\BlogController@index');

Route::get('/isi-post/{slug}', 'Blog\BlogController@isi_blog')->name('blog.isi');
Route::get('/list-post','Blog\BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','Blog\BlogController@list_category')->name('blog.category');
Route::get('/cari','Blog\BlogController@cari')->name('blog.cari');



// Backend

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'Admin\HomeController@index')->name('home');
	Route::resource('/category', 'Admin\CategoryController');
	Route::resource('/tag', 'Admin\TagController');
	Route::get('/post/tampil_hapus', 'Admin\PostController@tampil_hapus')->name('post.tampil_hapus');
	Route::get('/post/restore/{id}', 'Admin\PostController@restore')->name('post.restore');
	Route::delete('/post/kill/{id}', 'Admin\PostController@kill')->name('post.kill');
	Route::resource('/post', 'Admin\PostController');
	Route::resource('/user', 'Admin\UserController');
});









