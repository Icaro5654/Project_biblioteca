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
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('site.teste');



