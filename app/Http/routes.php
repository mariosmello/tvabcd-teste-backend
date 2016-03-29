<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/', 'IndexController@index');
    Route::get('/dashboard', 'IndexController@dashboard');

    Route::post('/appointment', 'IndexController@store');
    Route::get('/appointment_success', function () {
        return View('appointment_success');
    });
    /**
     * Client
     */
    Route::resource('clients', 'ClientController');
    /**
     * Doctor
     */
    Route::resource('doctors', 'DoctorController');
    /**
     * Show Doctor
     */
    Route::get('/doctor/{doctor}', 'DoctorController@view');
});

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('clients', 'ClientController');
});
