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

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/login', function () {
    return view('pages.login');
});
Auth::routes();

Route::post('/home', 'StatusController@create')->name('bagikanStatus');
// Route::get('/register', 'HomeController@index')->name('register');
// Route::get('/login', 'HomeController@index')->name('login');