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

Route::get('students/{id}','StudentController@show')->name('students.show');

Route::get('students/{id}/edit','StudentController@edit')->name('students.edit');

Route::patch('students/{id}','StudentController@update')->name('students.update');

Route::delete('students/{id}','StudentController@destroy')->name('students.destroy');   

// Route::resource('students','StudentController');

//route for faculty
Route::resource('faculty','FacultyController');

//route for semester
Route::resource('semester','SemesterController');

//route for batch
Route::resource('batch','BatchController');