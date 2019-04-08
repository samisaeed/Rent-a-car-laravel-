<?php

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
//     return view('landing');
// });

Route::get('/', 'WelcomeController@index');



Route::get('/daybooking', 'CustomerController@ajax');
Route::get('/oneway', 'CustomerController@ajax');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/companysignup', 'CompanyController@signup');
Route::post('/storesignup', 'CompanyController@storesignup');
Route::get('/companysign', 'CompanyController@signin')->middleware('Usermiddleware');
Route::post('/companysign', 'CompanyController@getsignin');
Route::get('/logout', 'CompanyController@logout');
Route::get('/searchcar', 'CustomerController@searchcar');
Route::get('/searchcardesc', 'CustomerController@searchcardesc');



Route::get('/order/{carnumber}/{from}/{to}', 'OrderController@orders');

Route::post('/order/{carnumber}/{from}/{to}', 'CustomerController@customersignin');
Route::post('/postorder/{carnumber}', 'OrderController@postorder');

Route::get('/makeorder/{carnumber}/{from}/{to}', 'OrderController@makeorders');
Route::get('/customersignup/{carnumber}/{from}/{to}', 'CustomerController@getsignup');
Route::post('/customersignup/{carnumber}/{from}/{to}', 'CustomerController@postsignup');

Route::get('/customerlogout', 'CustomerController@logout');






Route::middleware('checkAdmin')->group(function () {

      Route::get('/company/{companyname}', 'CompanyController@profile');
      Route::get('/addnewcar/{companyid}/{companyname}', 'CompanyController@addnewcar');
      Route::post('/addnewcar/{companyid}/{companyname}', 'CompanyController@postnewcar');
      Route::get('/addnewlocation/{companyid}/{companyname}', 'CompanyController@addnewlocation');
      Route::post('/addnewlocation/{companyid}/{companyname}', 'CompanyController@postnewlocation');
      Route::get('/checkorders/{companyid}', 'CompanyController@checkorders');
      Route::get('/bookedcars/{companyid}', 'CompanyController@bookedcars');

      Route::get('/release/{carnumber}', 'CompanyController@releasecar');


      Route::get('/bookorder/{carnumber}/{email}/{pickupdate}/{releasedate}', 'CompanyController@confirmorder');
      Route::get('/cancelorder/{carnumber}/{email}', 'CompanyController@cancelorders');

      Route::post('/sendmail/{email}/{carnumber}', 'CompanyController@sendemail');
      Route::get('/daybooking/searchajax', 'CustomerController@searchajax');

      Route::get('/daybooking/searchajaxTo', 'CustomerController@searchajaxTo');

});

Route::get('/user1', function(){
  return view('user1');
})->middleware('Usermiddleware');
Route::get('/user2', function(){
  return view('user2');
})->middleware('user2');
Route::get('/user3', function(){
  return view('user3');
})->middleware('user3');
