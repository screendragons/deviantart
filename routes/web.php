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

Route::get('/home', function () {
    return view('home');
});

// Route::get('/upload', function () {
//     return view('upload');
// });

Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
// Route::get('/logout', '\App\Http\Controllers\Auth\LogOutController@index');
// Route::get('/logout', 'LogOutController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Dropzone
// Route::get('image/upload','ImageUploadController@fileCreate')->name('upload'); //verkeerde path dus moet dit fixen 11/5/2019
Route::get('/resources/views/imageupload.blade.php','ImageUploadController@fileCreate')->name('upload'); //verkeerde path dus moet dit fixen 11/5/2019

Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');
