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

//Post routes
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.destroy');
Route::post('/posts', 'PostController@store')->name('post.store');

//Contact routes
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::get('/contact/create', 'ContactController@create')->name('contact.create');
Route::get('/contact/{contact}', 'ContactController@show')->name('contact.show');
Route::get('/contact/{contact}/edit', 'ContactController@edit')->name('contact.edit');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::patch('/contact/{contact}', 'ContactController@update')->name('contact.update');
Route::delete('/contact/{contact}', 'ContactController@destroy')->name('contact.destroy');

//Photos routes
Route::get('/photos', 'PhotoController@index')->name('photos.index');
Route::get('/photo/create', 'PhotoController@create')->name('photo.create');
Route::get('/photo/{photo}', 'PhotoController@show')->name('photo.show');
Route::post('/photos', 'PhotoController@store')->name('photo.store');
Route::get('/photos/{photo}/edit', 'PhotoController@edit')->name('photo.edit');
Route::patch('/photos/{photo}', 'PhotoController@update')->name('photo.update');
Route::delete('/photos/{photo}', 'PhotoController@destroy')->name('photo.destroy');



