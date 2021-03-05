<?php

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

Route::get('/', 'DashboardController@adminHome')->name('adminPanel');
Route::get('settings/edit','SettingController@edit' )->name('settings.edit');
Route::put('settings/update','SettingController@update' )->name('settings.update');
Route::resource('phones','PhoneController');
Route::resource('emails','EmailController');
Route::resource('addresses','AdressController');
Route::resource('social-media','SocialMediaController');
Route::resource('sliders', 'SliderController');
Route::resource('blogs', 'BlogController');
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::get('/news-letter', 'NewsLetterController@index')->name('NewsLetter');
Route::get('abouts/edit','AboutController@edit' )->name('about.edit');
Route::put('abouts/update','AboutController@update' )->name('about.update');
