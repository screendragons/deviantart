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
Route::post('/home', 'ImageUploadController@show')->name('home.show');

// Create
Route::get('/image/create','ImageUploadController@create')->name('image.create');
Route::post('/image/store','ImageUploadController@store')->name('image.store');

// Read
// Route::post('/image/show','ImageUploadController@show')->name('image.show');
Route::get('/image/show','ShowController@show')->name('image.show');

// Update
// Route::post('/image/upload/store','ImageUploadController@fileStore')->name('image.store');

// Delete
Route::post('image/delete','ImageUploadController@destroy')->name('image.destroy');

// Route::get('/show', 'ShowController@index')->name('show');

Route::resource('images', 'ImageUploadController');
Route::resource('images', 'HomeController');
