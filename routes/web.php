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

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');

Route::post('/posts', 'PostController@store')->name('post.store');


Route::get('/about', function (){
    return view('about');
})->name('about.index');
Route::get('/contacts', function (){
    return view('contacts');
})->name('contacts.index');
