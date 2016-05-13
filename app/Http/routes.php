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

Route::get('/', function () {
    return view('index');	
});
Route::get('/employees', 'EmployeeController@getIndex');
Route::get('/employees/show/{name?}', 'EmployeeController@getShow');
Route::get('/employees/create', 'EmployeeController@getCreate');
Route::post('/employees/create', 'EmployeeController@postCreate');
Route::get('/employees/edit/{id}', 'EmployeeController@getEdit');
Route::post('/employees/edit/{id}', 'EmployeeController@postEdit');
Route::post('/employees/delete/{id}', 'EmployeeController@postDelete');
Route::get('/schedule', 'ScheduleController@getIndex');
Route::get('/schedule/show/{id}', 'ScheduleController@getShow');
Route::get('/schedule/create', 'ScheduleController@getCreate');
Route::post('/schedule/create', 'ScheduleController@postCreate');
Route::get('/schedule/edit/{id}', 'ScheduleController@getEdit');
Route::post('/schedule/edit/{id}', 'ScheduleController@postEdit');
Route::post('/schedule/delete/{id}', 'ScheduleController@postDelete');
