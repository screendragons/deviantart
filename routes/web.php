<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', function () {
    return view('home');
});


Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dropzone
Route::post('/resources/views/imageupload.blade.php','ImageUploadController@fileCreate')->name('upload');

//store image in database
Route::POST('/image/upload/store','ImageStoreController@fileStore')->name('save');

Route::post('image/delete','ImageUploadController@fileDestroy');
