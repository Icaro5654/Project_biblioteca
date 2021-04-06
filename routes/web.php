<?php

Route::get('/teste', function () {
    return view('site.teste');
});

Route::get('/publicações', function () {
    return view('site.publicações');
});

Route::get('/biblioteca', function (){
    return view('site.biblioteca');
});

Route::get('/memorial', function () {
    return view('site.memorial');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

