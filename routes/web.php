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

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::post('/insertStudent', [
    'as' => 'insert.Student',
    'uses' => 'InsertDetailsController@storeStudentDetails'
  ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/first_approval_details', 'InsertDetailsController@storeStudentDetails');

Route::get('/first_approval_details', function () {
    return view('first_approval_details');
});

<<<<<<< HEAD
Route::get('/student_status', function () {
    return view('');
});

//Route::get('/first_approval_details', 'PrimaryDetailsController@enterPrimaryDetails');
=======

Route::get('/primary_details', 'PrimaryDetailsRetrievalController@showDetails');

>>>>>>> 84a1bef3f2cc0b5ddd5f41448f64537d90442790



