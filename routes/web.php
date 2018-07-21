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

Route::post('/updateFirstStatus', [
    'as' => 'update.firststatus',
    'uses' => 'InsertDetailsController@updateFirstStatus'
  ]);

Route::post('/updatePeriodAmt', [
    'as' => 'update.periodamt',
    'uses' => 'InsertDetailsController@storeAfterVerification'
  ]);

Route::post('/uploadDocuments', [
    'as' => 'upload.documents',
    'uses' => 'FileUploadController@uploadFile'
  ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/first_approval_details', 'InsertDetailsController@storeStudentDetails');

Route::get('/first_approval_details', function () {
	$user = Auth::user();
    return view('first_approval_details')->with('user',$user);
});

Route::get('/upload_documents', function () {
    return view('documents');
});

Route::get('/afterVerify', function () {
    return view('period_amount');
});

Route::get('/firstapprovals', 'PrimaryDetailsRetrievalController@showDetails');

//Route::get('/first_approval_details', 'PrimaryDetailsController@enterPrimaryDetails');


Route::get('/primary_details', 'PrimaryDetailsRetrievalController@showDetails');

Route::get('/profile', 'ProfileController@showProfile');



Route::get('/primary_details', 'PrimaryDetailsRetrievalController@showDetails');

Route::get('/makeRequest', 'GlobalsController@makeRequest');

Route::get("/dummyMessage",'GlobalsController@sendSMS');

Route::get("/dummyMail",'GlobalsController@sendMail');

Route::get("/chatroom",'ChatController@chat');

Route::get("/chatrooms",'ChatsController@chats');