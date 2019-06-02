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
// Route::get('/logout', '\App\Http\Controllers\Auth\LogOutController@index');
// Route::get('/logout', 'LogOutController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dropzone
Route::post('/resources/views/imageupload.blade.php','ImageUploadController@fileCreate')->name('upload');

//store image in database
Route::get('imagestore.blade.php','ImageStoreController@fileStore')->name('save');

Route::post('image/delete','ImageUploadController@fileDestroy');
