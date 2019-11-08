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
    return view('welcome');
 
});

Route::get('/contact', function () {
    return view('contact');
 
});

Route::get('/studentLogin', function () {
    return view('studentLogin');
 
});
Route::get('/teacherLogin', function () {
    return view('teacherLogin');
 
});
Route::get('/parentLogin', function () {
    return view('parentLogin');
 
});


Route::resource('notifications' , 'NotificationsController');
Auth::routes();

Route::get('teacher/home', 'HomeController@teacherHome')->name('teacher.home')->middleware('Admin');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('Admin');
Route::get('student/home', 'HomeController@studentHome')->name('student.home')->middleware('Admin');
Route::get('parent/home', 'HomeController@parentHome')->name('parent.home')->middleware('Admin');