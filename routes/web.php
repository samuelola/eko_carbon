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
Route::post('createe', 'App\Http\Controllers\HouseHoldRegisterController@createe')->name('createe');

Route::post('companycreate', 'App\Http\Controllers\companyController@companycreate')->name('companycreate');

Route::get('/signin', 'App\Http\Controllers\LoginController@signin')->name('signin');

Route::post('/thelogin', 'App\Http\Controllers\LoginController@login')->name('login');

//Logout
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

//try version



Route::get('/listing', 'App\Http\Controllers\KycController@listing')->name('listing')->middleware('auth');
Route::get('/kyc', 'App\Http\Controllers\KycController@kyc')->name('kyc')->middleware('auth');
Route::get('/kyc/carbon', 'App\Http\Controllers\KycController@kyccarbon')->name('kyccarbon')->middleware('auth');
Route::get('/pre-assessment', 'App\Http\Controllers\ProjectController@preassessment')->name('preassessment')->middleware('auth');
Route::get('/dashboard', 'App\Http\Controllers\KycController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/admindashboard', 'App\Http\Controllers\KycController@admindashboard')->name('admindashboard');
Route::get('/addproject', 'App\Http\Controllers\ProjectController@addproject')->name('addproject')->middleware('auth');
Route::get('/archive', 'App\Http\Controllers\ProjectController@archive')->name('archive')->middleware('auth');
Route::get('/previewproject/{id}', 'App\Http\Controllers\ProjectController@previewproject')->name('previewproject')->middleware('auth');
Route::get('/profile', 'App\Http\Controllers\ProjectController@profile')->name('profile')->middleware('auth');
Route::get('/offsetbids', 'App\Http\Controllers\ProjectController@offsetbids')->name('offsetbids')->middleware('auth');

Route::get('/progresslog', 'App\Http\Controllers\ProjectController@progresslog')->name('progresslog')->middleware('auth');
Route::get('/projectoverview', 'App\Http\Controllers\ProjectController@projectoverview')->name('projectoverview')->middleware('auth');

Route::get('/adminprofile', 'App\Http\Controllers\ProjectController@adminprofile')->name('adminprofile')->middleware('auth');

Route::get('auth/google','App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('auth/google/callback','App\Http\Controllers\GoogleController@handleGoogleCallback');

Route::get('get-states', 'App\Http\Controllers\KycController@getState')->name('getState');
Route::get('/editrolename/{id}', 'App\Http\Controllers\KycController@getRole')->name('getRole');
Route::get('get-projectdesc', 'App\Http\Controllers\ProjectController@getDesc')->name('getDesc');
Route::get('get-thelog', 'App\Http\Controllers\ProjectController@getLog')->name('getLog');

Route::get('/get-theuser', 'App\Http\Controllers\ProjectController@getSmallUser')->name('getSmallUser');

Route::get('get-cities', 'App\Http\Controllers\KycController@getCity')->name('getCity');

Route::post('/savekyc', 'App\Http\Controllers\KycController@saveKYC')->name('savekyc');
Route::post('/createproject', 'App\Http\Controllers\KycController@createproject')->name('createproject')->middleware('auth');

Route::post('/updatelog', 'App\Http\Controllers\ProjectController@updatelog')->name('updatelog')->middleware('auth');

Route::post('/addpreassessment', 'App\Http\Controllers\ProjectController@addpreassessment')->name('addpreassessment')->middleware('auth');
Route::post('/addpreassessmentminigrid', 'App\Http\Controllers\ProjectController@addpreassessmentminigrid')->name('addpreassessmentminigrid')->middleware('auth');

Route::get('/trialversion', 'App\Http\Controllers\ProjectController@trialversion')->name('trialversion');
Route::post('/trialpreassessment', 'App\Http\Controllers\ProjectController@trialpreassessment')->name('trialpreassessment');


Route::get('/trialresult', 'App\Http\Controllers\ProjectController@trialresult')->name('trialresult');

//certificate 

Route::get('/certificate', 'App\Http\Controllers\KycController@certificate')->name('certificate')->middleware('auth');

Route::get('/minigridcertificate', 'App\Http\Controllers\KycController@minigridcertificate')->name('minigridcertificate')->middleware('auth');

Route::get('/adminusers', 'App\Http\Controllers\KycController@adminusers')->name('adminusers')->middleware('auth');
Route::get('/adminbids', 'App\Http\Controllers\KycController@adminbids')->name('adminbids')->middleware('auth');

Route::delete('deleteuser/{id}', 'App\Http\Controllers\KycController@deleteuser')->name('deleteuser')->middleware('auth');

Route::post('/updatelister', 'App\Http\Controllers\KycController@updatelister')->name('updatelister')->middleware('auth');

Route::post('/updatetheproject', 'App\Http\Controllers\KycController@updatetheproject')->name('updatetheproject')->middleware('auth');

Route::post('/updatetherole', 'App\Http\Controllers\KycController@updatetherole')->name('updatetherole')->middleware('auth');

Route::get('/adminproject', 'App\Http\Controllers\KycController@adminproject')->name('adminproject')->middleware('auth');

Route::delete('deleteproject/{id}', 'App\Http\Controllers\KycController@deleteproject')->name('deleteproject')->middleware('auth');

Route::get('adminsetting', 'App\Http\Controllers\KycController@adminsetting')->name('adminsetting')->middleware('auth');
Route::post('updaterolepermission', 'App\Http\Controllers\KycController@updaterolepermission')->name('updaterolepermissions')->middleware('auth');

Route::post('rolepermission', 'App\Http\Controllers\KycController@rolepermission')->name('rolepermission')->middleware('auth');
// Route::get('admin/addrole', 'App\Http\Controllers\KycController@adminaddrole')->name('adminaddrole')->middleware('auth');
Route::post('/deletelister', 'App\Http\Controllers\KycController@deletelister')->name('deletelister')->middleware('auth');


Route::post('/approve', 'App\Http\Controllers\KycController@approve')->name('approve')->middleware('auth');
Route::post('/disapprove', 'App\Http\Controllers\KycController@disapprove')->name('disapprove')->middleware('auth');
Route::post('/pending', 'App\Http\Controllers\KycController@pending')->name('pending')->middleware('auth');
Route::post('/updateadminrole', 'App\Http\Controllers\KycController@updateadminrole')->name('updateadminrole')->middleware('auth');

//household

Route::get('/household/dashboard/', 'App\Http\Controllers\houseHoldController@householddashboard')->name('householddashboard')->middleware('auth');

Route::get('/carbonemission', 'App\Http\Controllers\houseHoldController@carbonemmission')->name('carbonemmission')->middleware('auth');

Route::get('/generatereport', 'App\Http\Controllers\houseHoldController@generatereport')->name('generatereport')->middleware('auth');

Route::get('/emissionreport/{type}', 'App\Http\Controllers\houseHoldController@emissionreport')->name('emissionreport')->middleware('auth');


Route::get('/marketplace', 'App\Http\Controllers\houseHoldController@marketplace')->name('marketplace')->middleware('auth');
Route::get('/plan', 'App\Http\Controllers\houseHoldController@plan')->name('plan')->middleware('auth');

Route::post('/addoffsetters', 'App\Http\Controllers\ProjectController@addoffsetters')->name('addoffsetters')->middleware('auth');

Route::post('/searchProject', 'App\Http\Controllers\ProjectController@searchProject')->name('searchProject');
Route::post('/searchCat', 'App\Http\Controllers\ProjectController@searchCat')->name('searchCat');
Route::post('/allCat', 'App\Http\Controllers\ProjectController@allCat')->name('allCat');
Route::post('/searchFilter', 'App\Http\Controllers\ProjectController@searchFilter')->name('searchFilter');
Route::post('/householdcal', 'App\Http\Controllers\houseHoldController@householdcal')->name('householdcal');


//household
Route::get('/householdsignin', 'App\Http\Controllers\houseHoldController@householdlogin')->name('householdsignin');
Route::get('/householdsignup', 'App\Http\Controllers\houseHoldController@householdsignup')->name('householdsignup');
Route::get('/householdlist', 'App\Http\Controllers\houseHoldController@householdlist')->name('householdlist');
Route::get('/householdaccount', 'App\Http\Controllers\houseHoldController@householdmyaccount')->name('householdmyaccount')->middleware('auth');
Route::post('/householdupdateacct', 'App\Http\Controllers\houseHoldController@householdupdateacct')->name('householdupdateacct')->middleware('auth');
Route::get('/householdtrial', 'App\Http\Controllers\houseHoldController@householdtrial')->name('householdtrial');

Route::post('change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');

Route::post('/emittcarboncar', 'App\Http\Controllers\houseHoldController@emittcarboncar')->name('emittcarboncar')->middleware('auth');
Route::post('/emittcarbonflight', 'App\Http\Controllers\houseHoldController@emittcarbonflight')->name('emittcarbonflight')->middleware('auth');

Route::post('/emittcarbonhouse1', 'App\Http\Controllers\houseHoldController@emittcarbonhouse1')->name('emittcarbonhouse1')->middleware('auth');

Route::post('/procount', 'App\Http\Controllers\houseHoldController@procount')->name('procount')->middleware('auth');
Route::get('/householdlogout', 'App\Http\Controllers\houseHoldController@householdlogout')->name('householdlogout');
Route::post('/householdlogin', 'App\Http\Controllers\HouseHoldRegisterController@householdlogin')->name('householdlogin');
//organization

Route::get('/companylist', 'App\Http\Controllers\companyController@companylist')->name('companylist');
Route::get('/companysignup', 'App\Http\Controllers\companyController@companysignup')->name('companysignup');
Route::get('/company/dashboard/', 'App\Http\Controllers\companyController@companydashboard')->name('companydashboard')->middleware('auth');
Route::get('/companyaccount', 'App\Http\Controllers\companyController@companyaccount')->name('companyaccount')->middleware('auth');
Route::get('/companyemission', 'App\Http\Controllers\companyController@companyemission')->name('companyemission')->middleware('auth');
Route::get('/companysignin', 'App\Http\Controllers\companyController@companysignin')->name('companysignin');
Route::post('/companylogin', 'App\Http\Controllers\companyController@companylogin')->name('companylogin');

Route::get('/companylogout', 'App\Http\Controllers\companyController@companylogout')->name('companylogout');

Route::post('/factor', 'App\Http\Controllers\KycController@factor')->name('factor')->middleware('auth');
Route::post('/updatefactor', 'App\Http\Controllers\KycController@updatefactor')->name('updatefactor')->middleware('auth');

Route::post('/verifybank', 'App\Http\Controllers\KycController@verifybank')->name('verifybank')->middleware('auth');
