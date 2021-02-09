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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/free-zone/hello', 'TestController@guest');
Route::prefix('restricted-zone')
->middleware('auth')
->group(function () {
Route::get('/hello', 'TestController@logged')
->name('restricted-zone');
});
