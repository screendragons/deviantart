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

Route::get('/home', 'HomeController@index')->name('home');

// Upload image
Route::post('/resources/views/imageupload.blade.php','ImageUploadController@fileCreate')->name('image.upload');

//Store image in database
Route::post('/image/upload/store','ImageUploadController@fileStore')->name('image.store');

Route::post('image/delete','ImageUploadController@fileDestroy')->name('image.destroy');
