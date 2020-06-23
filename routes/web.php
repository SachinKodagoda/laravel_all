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


Route::namespace('Post')->prefix('post')->group(function () {
    Route::get('/', 'PostController@index')->name('post_index');
    Route::get('/all', 'PostController@getAllPosts')->name('getAllPosts');
    Route::get('/one/{id}', 'PostController@getOnePost')->name('getOnePost');

    Route::get('/update/{id}', 'PostController@updatePostLink')->name('updatePostLink');
    Route::post('/updatePost', 'PostController@updatePost')->name('updatePost');

    Route::post('/addPostLink', 'PostController@addPostLink')->name('addPostLink');
    Route::get('/addPost', 'PostController@addPost')->name('addPost');

    Route::get('/delete/{id}', 'PostController@deletePost')->name('deletePost');
});

