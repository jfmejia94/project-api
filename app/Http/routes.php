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
    return view('welcome');
});

//API index
Route::resource('users', 'UserController');
Route::resource('courses', 'CourseController');
Route::resource('teachers', 'TeacherController');
Route::resource('universities', 'UniversityController');


Route::post('/users/create','UserController@create');
