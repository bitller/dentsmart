<?php

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index');
    
    Route::get('/patients', 'PatientsController@index');
    Route::get('/patients/new', 'PatientsController@createNewPatient');
        
    Route::get('/appointments', 'AppointmentsController@index');

    Route::get('/interventions', 'InterventionsController@index');
    Route::get('/interventions/get', 'InterventionsController@paginate');
    Route::post('/interventions/new', 'InterventionsController@createNewIntervention');
    Route::post('/interventions/delete', 'InterventionsController@deleteIntervention');
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