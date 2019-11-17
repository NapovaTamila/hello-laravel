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

// App Info
Route::get('/about','AppInfo@About');
Route::get('/contacts','AppInfo@Contacts');

Route::get('/licanse','GPL');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contacts', function () {
//     return view('contacts');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('image-manager', 'ImagesController');
