<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@allUser')->name('users');
