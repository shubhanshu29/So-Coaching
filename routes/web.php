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
    return view('front');
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/MemberLogin', function () {
    if(auth()->user()->userType==0){
        return view('admin.home');
    }
    if(auth()->user()->userType==1){
        return view('student.home');
    }
    if(auth()->user()->userType==2){
        return view('teacher.home');
    }
    if(auth()->user()->userType==3){
        return view('parent.home');
    }
});

Route::get('notifications', 'App\Http\Controllers\NotificationsController@index');
Route::get('notifications/create', 'App\Http\Controllers\NotificationsController@create');
Route::post('notifications/create', 'App\Http\Controllers\NotificationsController@store');
Route::delete('notifications/destroy/{id}', 'App\Http\Controllers\NotificationsController@destroy');


Route::get('/chats','App\Http\Controllers\ChatsController@index');
Route::get('/chats/view/{id}','App\Http\Controllers\ChatsController@view');
Route::post('/chats/view/{id}','App\Http\Controllers\ChatsController@store');

Route::get('/scholarships','App\Http\Controllers\ScholarshipsController@index');
Route::get('/scholarships/create','App\Http\Controllers\ScholarshipsController@create');
Route::post('/scholarships/create','App\Http\Controllers\ScholarshipsController@store');


Route::get('/relationships','App\Http\Controllers\RelationshipsController@index');
Route::post('/relationships','App\Http\Controllers\RelationshipsController@store');


Route::get('/studymaterial','App\Http\Controllers\studyMaterialsController@index');
Route::get('/studymaterial/upload','App\Http\Controllers\studyMaterialsController@create');
Route::post('studymaterial/upload','App\Http\Controllers\studyMaterialsController@store');


Route::get('/attendance','App\Http\Controllers\AttendancesController@index');
Route::get('/attendance/create/{id}','App\Http\Controllers\AttendancesController@create');
Route::post('/attendance/create/{id}','App\Http\Controllers\AttendancesController@store');
Route::get('/attendance/view/{id}','App\Http\Controllers\AttendancesController@view');


Route::get('/marks','App\Http\Controllers\MarksController@index');
Route::get('/marks/create/{id}','App\Http\Controllers\MarksController@create');
Route::post('/marks/create/{id}','App\Http\Controllers\MarksController@store');
Route::get('/marks/view/{id}','App\Http\Controllers\MarksController@view');

Route::get('/dashboard','App\Http\Controllers\HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

