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

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/about', 'AboutController@getIndex')->name('about');

Route::get('/news', 'NewsController@getIndex')->name('news');

Route::get('/donation', 'DonationController@getIndex')->name('donation');


Route::get('/newsletter', 'NewsletterController@getIndex')->name('newsletter');

Route::get('/contact', 'ContactController@getIndex')->name('contact');

Route::get('/privacy', 'PrivacyController@getIndex')->name('privacy');

