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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register-as', function () {
   return view('auth.register-as');
});

Route::get('register-company', 'CompanyController@register');
Route::post('register-company', 'CompanyController@storeRegistration');
Route::get('company/config', 'CompanyController@config');
Route::get('company/test/make', 'CompanyController@makeTest');
Route::get('company/{id}', 'CompanyController@getCompany');


Route::get('register-developer', 'DeveloperController@register');
Route::get('developer/config', 'DeveloperController@config');
Route::get('developer/index', 'DeveloperController@index');