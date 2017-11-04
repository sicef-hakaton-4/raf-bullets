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

Route::get('/stefan', function () {
    return 'cao ja sam stefan';
})->middleware(\App\Http\Middleware\CompanyAuth::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register-as', function () {
   return view('auth.register-as');
});

Route::get('register-company', 'CompanyController@register');
Route::get('register-developer', 'DeveloperController@register');