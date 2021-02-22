<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Admin Panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your Admin Panel Control. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web", "auth:sanctum", "verified" middleware group. Now create something great!
|
*/

Route::get('/','HomepageController@index')->name('homepage');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/signup', 'SignupController@index')->name('signup');
Route::get('/contact-us', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send')->name('sendMessage');
Route::post("news-letter", "NewsLetterController@store")->name('newsLetter');
