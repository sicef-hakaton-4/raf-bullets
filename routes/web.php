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
});
Route::get('/todor', function() {
    return 'cao ja sam todor';
});

//to je to sad push? sad opet komit pa push

//ako nisi siguran uvek uradi prvo pul, da bismo odrzali sve na lokalu i serveru sinhronizovano
//ako je ovo plavo, znaci da moras da komitujes