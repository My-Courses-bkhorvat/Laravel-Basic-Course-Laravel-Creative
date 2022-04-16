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

Route::get('/', 'HomeController@index');
//Routes to main
Route::get('/main', 'MainController@index')->name('main.index');

//Routes to admin panel

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Post'], function(){
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});

//Routes to Posts
Route::group(['namespace' => 'Post'], function (){
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/post/create', 'CreateController')->name('post.create');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.destroy');
    Route::post('/posts', 'StoreController')->name('post.store');
});


//Routes to Contacts
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::get('/contact/create', 'ContactController@create')->name('contact.create');
Route::get('/contact/{contact}', 'ContactController@show')->name('contact.show');
Route::get('/contact/{contact}/edit', 'ContactController@edit')->name('contact.edit');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::patch('/contact/{contact}', 'ContactController@update')->name('contact.update');
Route::delete('/contact/{contact}', 'ContactController@destroy')->name('contact.destroy');

//Routes to Photos
Route::get('/photos', 'PhotoController@index')->name('photos.index');
Route::get('/photo/create', 'PhotoController@create')->name('photo.create');
Route::get('/photo/{photo}', 'PhotoController@show')->name('photo.show');
Route::post('/photos', 'PhotoController@store')->name('photo.store');
Route::get('/photos/{photo}/edit', 'PhotoController@edit')->name('photo.edit');
Route::patch('/photos/{photo}', 'PhotoController@update')->name('photo.update');
Route::delete('/photos/{photo}', 'PhotoController@destroy')->name('photo.destroy');

//Routes to Friends

Route::get('/friends', 'FriendController@index')->name('friends.index');

//Routes to Tasks

Route::get('/tasks', 'TaskController@index')->name('tasks.index');

//Routes to Skills

Route::get('/skills', 'SkillController@index')->name('skills.index');

//Routes to Days

Route::get('/days', 'DayController@index')->name('days.index');

//Routes to Habits

Route::get('/habits', 'HabitController@index')->name('habits.index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
