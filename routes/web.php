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