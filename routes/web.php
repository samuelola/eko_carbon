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



Route::get('/', 'App\Http\Controllers\RegisterController@signup')->name('signup');

Route::post('create', 'App\Http\Controllers\RegisterController@create')->name('create');

Route::get('/signin', 'App\Http\Controllers\LoginController@signin')->name('signin');

Route::post('/thelogin', 'App\Http\Controllers\LoginController@login')->name('login');

//Logout
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');


Route::get('/listing', 'App\Http\Controllers\KycController@listing')->name('listing')->middleware('auth');
Route::get('/kyc', 'App\Http\Controllers\KycController@kyc')->name('kyc')->middleware('auth');
Route::get('/pre-assessment', 'App\Http\Controllers\ProjectController@preassessment')->name('preassessment')->middleware('auth');
Route::get('/dashboard', 'App\Http\Controllers\KycController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/admindashboard', 'App\Http\Controllers\KycController@admindashboard')->name('admindashboard');
Route::get('/addproject', 'App\Http\Controllers\ProjectController@addproject')->name('addproject')->middleware('auth');
Route::get('/archive', 'App\Http\Controllers\ProjectController@archive')->name('archive')->middleware('auth');
Route::get('/previewproject/{id}', 'App\Http\Controllers\ProjectController@previewproject')->name('previewproject')->middleware('auth');
Route::get('/profile', 'App\Http\Controllers\ProjectController@profile')->name('profile')->middleware('auth');

Route::get('auth/google','App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('auth/google/callback','App\Http\Controllers\GoogleController@handleGoogleCallback');

Route::get('get-states', 'App\Http\Controllers\KycController@getState')->name('getState');
Route::get('get-cities', 'App\Http\Controllers\KycController@getCity')->name('getCity');

Route::post('/savekyc', 'App\Http\Controllers\KycController@saveKYC')->name('savekyc');
Route::post('/createproject', 'App\Http\Controllers\KycController@createproject')->name('createproject')->middleware('auth');
Route::post('/addpreassessment', 'App\Http\Controllers\ProjectController@addpreassessment')->name('addpreassessment')->middleware('auth');

//certificate 

Route::get('/certificate', 'App\Http\Controllers\KycController@certificate')->name('certificate')->middleware('auth');

Route::get('/adminusers', 'App\Http\Controllers\KycController@adminusers')->name('adminusers')->middleware('auth');



