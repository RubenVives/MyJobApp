<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/{any}', function () {
    return view('index');
})->where("any",".*");

/*Route::view('/' , 'home')->name('home');
Route::view('acerca-de' , 'about')->name('about');
Route::view('blog' , 'blog')->name('blog.index');
Route::get('blog/{post:slug}' , 'PostController@show')->name('blog.show');
Route::view('contactos' , 'contact')->name('contact');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
