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

//Route for students
Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',function() {
    return view('students');
});

Route::get('students','StudentController@index')-> name('student.index');

Route::get('students/create','StudentController@create')-> name('students.create');

Route::post('students','StudentController@store')-> name('students.store');

// Route::resource('students','StudentController');

//route for faculty
Route::resource('faculty','FacultyController');