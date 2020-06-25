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


Route::namespace('Post')->prefix('posts')->group(function () {
    Route::get('/', 'PostController@index')->name('post_index');
    Route::get('/create', 'PostController@create')->name('post_create');
    Route::post('/', 'PostController@store')->name('post_store');
    Route::get('/{post}', 'PostController@show')->name('post_show');
    Route::get('/{post}/edit', 'PostController@edit')->name('post_edit');
    Route::patch('/{post}', 'PostController@update')->name('post_update');
    Route::delete('/{post}', 'PostController@destroy')->name('post_destroy');

//    Route::get('/update/{id}', 'PostController@updatePostLink')->name('updatePostLink');
//    Route::post('/updatePost', 'PostController@updatePost')->name('updatePost');
//
//    Route::post('/addPostLink', 'PostController@addPostLink')->name('addPostLink');
//    Route::get('/addPost', 'PostController@addPost')->name('addPost');
//
//    Route::get('/delete/{id}', 'PostController@deletePost')->name('deletePost');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//Restfull Controllers
//Route::get('/posts', 'PostController@index');
//Route::get('/posts/create', 'PostController@create');
//Route::post('/posts', 'PostController@store');
//Route::get('/posts/{post}', 'PostController@show');

