<?php

use App\Http\Controllers\DonationController;
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

//Home
Route::get('/', 'HomeController@getIndex')->name('home');


//About
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/about/detail/{about_id}', 'AboutController@detail')->name('AboutDetail');


//Newsletter
Route::get('/newsletter', 'NewsletterController@getIndex')->name('newsletter');
Route::post('/newsletter', 'NewsletterController@postNewsletter')->name('newsletter.save');

Route::get('/validationNewsletter', 'NewsletterController@index')->name('validationNewsletter');


//Donation
Route::get('/donation', 'DonationController@donation')->name('donation');
Route::get('/donationGift', 'DonationController@getIndex')->name('donationGift');

Route::get('/validationDonation', 'DonationController@getIndex')->name('validationDonation');

Route::post('/success', 'DonationController@getSuccess')->name('donation.success');

Route::name('webhooks.mollie')->any('webhooks/mollie', 'WebHookController@handle');



//News
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/detail/{news_id}', 'NewsController@detail')->name('NewsDetail');


//Contact
//Route::get('/contact', 'ContactController@index')->name('contact');
//Route::post('/contact/save', 'ContactController@save')->name('saveContact');

Route::get('/contact', 'ContactController@getContact')->name('contact');
Route::post('/contact', 'ContactController@postContact')->name('contact.save');

Route::get('/validationContact', 'ContactController@getIndex')->name('validationContact');


//Privacy
Route::get('/privacy', 'PrivacyController@index')->name('privacy');



//-----------------------------//

Auth::routes();

//admin-paneel
Route::get('/admin', 'HomeController@admin')->name('admin');

//about -- admin
Route::get('/admin/about', 'AdminController@about')->name('adminAbout');
Route::get('/admin/about/create', 'AdminController@aboutCreate')->name('aboutCreate');
Route::post('/admin/about/save', 'AdminController@aboutSave')->name('aboutSave');
Route::get('/admin/about/edit/{about_id}', 'AdminController@aboutEdit')->name('aboutEdit');
Route::patch('/admin/about/update/{about_id}', 'AdminController@aboutUpdate')->name('aboutUpdate');
Route::get('/admin/about/delete/{about_id}', 'AdminController@aboutDelete')->name('aboutDelete');

//news -- admin
Route::get('/admin/news', 'AdminController@news')->name('adminNews');
Route::get('/admin/news/create', 'AdminController@newsCreate')->name('newsCreate');
Route::post('/admin/news/save', 'AdminController@newsSave')->name('newsSave');
Route::get('/admin/news/edit/{news_id}', 'AdminController@newsEdit')->name('newsEdit');
Route::patch('/admin/news/update/{news_id}', 'AdminController@newsUpdate')->name('newsUpdate');
Route::get('/admin/news/delete/{news_id}', 'AdminController@newsDelete')->name('newsDelete');

//privacy -- admin
Route::get('/admin/privacy', 'AdminController@privacy')->name('adminPrivacy');
Route::get('/admin/privacy/create', 'AdminController@privacyCreate')->name('privacyCreate');
Route::post('/admin/privacy/save', 'AdminController@privacySave')->name('privacySave');
Route::get('/admin/privacy/edit/{privacy_id}', 'AdminController@privacyEdit')->name('privacyEdit');
Route::patch('/admin/privacy/update/{privacy_id}', 'AdminController@privacyUpdate')->name('privacyUpdate');
Route::get('/admin/privacy/delete/{privacy_id}', 'AdminController@privacyDelete')->name('privacyDelete');


//contact -- admin
Route::get('/admin/contact', 'AdminController@contact')->name('adminContact');
Route::get('/admin/contact/delete/{privacy_id}', 'AdminController@Deletecontact')->name('contactDelete');




