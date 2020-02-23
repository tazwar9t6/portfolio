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
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('register', function () {
    return view('registration');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::post('/store','HomeController@store')->name('store');
Route::post('/register','HomeController@register')->name('register');
Route::get('/admin/cdata','HomeController@table')->name('table');

// action in contacts table
Route::get('/action/view{id}' , 'HomeController@show');
Route::get('/action/delete{id}' , 'HomeController@destroy');
Route::get('/action/edit{id}' , 'HomeController@edit');
Route::post('/update{id}' , 'HomeController@update');

//for image
Route::get('/image','HomeController@image');
Route::post('/image/store','HomeController@imagestore')->name('image.store');
//image fetch
Route::get('/image/all','HomeController@imageAll');
 