<?php


use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Mail;
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
     return view('welcome');
 });


Route::namespace('Post')->prefix('posts')->group(function () {
    Route::get('/', 'PostController@index')->name('post_index');
    Route::get('/create', 'PostController@create')->name('post_create');
    Route::post('/', 'PostController@store')->name('post_store');
    Route::get('/{post}', 'PostController@show')->name('post_show');
    Route::get('/{post}/edit', 'PostController@edit')->name('post_edit');
    Route::patch('/{post}', 'PostController@update')->name('post_update');
    Route::delete('/{post}', 'PostController@destroy')->name('post_destroy');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/email', function(){
    Mail::to('abinaya.yoga.k@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
