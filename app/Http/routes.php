<?php

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/patients', 'PatientsController@index');
});

Route::group(['namespace' => 'Auth'], function() {
    // Login and logout
    Route::get('/login', 'LoginController@index')->middleware('guest');
    Route::post('/login', 'LoginController@login')->middleware('guest');
    Route::get('/logout', 'LoginController@logout')->middleware('auth');

    // Register
    Route::get('/register', 'RegisterController@index')->middleware('guest');
    Route::post('/register', 'RegisterController@register')->middleware('guest');
});

Route::get('/home', 'HomeController@index');
