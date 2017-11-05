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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('google-test', function (){
    return view('google-test');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register-as', function () {
   return view('auth.register-as');
});

Route::get('test', 'TestController@index');

Route::get('register-company', 'CompanyController@register');
Route::post('register-company', 'CompanyController@storeRegistration');
Route::get('company/config', 'CompanyController@config');
Route::get('company/test/make', 'CompanyController@makeTest');
Route::get('company/{id}', 'CompanyController@getCompany');
Route::get('company/job/new', 'CompanyController@newJob');
Route::Post('company/job/new', 'CompanyController@storeJob');
Route::get('company/job/{id}', 'CompanyController@indexJob');
Route::get('company/', 'CompanyController@developers');


Route::get('register-developer', 'DeveloperController@register');


Route::middleware(['auth'])->group(function () {
    Route::get('developer/config', 'DeveloperController@config');
    Route::get('developer/index', 'DeveloperController@index');
    Route::get('developer/company/{companyId}', 'DeveloperController@storeCompany');
    Route::get('developer/test', 'DeveloperController@testMe');

});