<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);


/*
 * Registration!
 */
Route::get('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);

/**
 * Sessions
 *
 */
Route::get('login', [
    'as' => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('login', [
    'as' => 'login_path',
    'uses' => 'SessionsController@store'
]);

/**
 * Statuses
 *
 */
Route::get('statuses', 'StatusController@index');