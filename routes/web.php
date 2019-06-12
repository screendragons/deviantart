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
Route::get('/home', 'HomeController@show')->name('home.show');

// Create
Route::post('/image/create','ImageUploadController@create')->name('image.create');
Route::post('/image/store','ImageUploadController@store')->name('image.store');

// Read
Route::post('/image/show','ImageUploadController@show')->name('image.show');

// Update
// Route::post('/image/upload/store','ImageUploadController@fileStore')->name('image.store');

// Delete
Route::post('image/delete','ImageUploadController@fileDestroy')->name('image.destroy');

Route::resource('images', 'ImageUploadController');
Route::resource('images', 'HomeController');
