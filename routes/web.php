<?php

//index
Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Weergeeft de profiel pagina
Route::get('/profile', 'ProfileController@index')->name('profile');

// Weergeeft de home pagina
Route::get('/home', 'HomeController@index')->name('home');

// Create
Route::get('/image/create','ImageController@create')->name('image.create');
Route::post('/image/store','ImageController@store')->name('image.store');

// Read
Route::get('/image/{id}','ImageController@show');

// Update
Route::get('/image/{id}/edit', 'ImageController@edit');
Route::put('/image/{id}', 'ImageController@update');

// Delete
Route::delete('/image/{id}','ImageController@destroy')->name('image.destroy');

// Route::resource('images', 'ImageUploadController');
// Route::resource('images', 'HomeController');
// Route::resource('admin', 'Admin\AdminController');

// Admin panel
Route::get('admin/{id}/adminedit', 'AdminController@edit');
Route::put('admin/{id}', 'AdminController@update');
Route::delete('admin/{id}', 'AdminController@destroy');
Route::get('admin', 'AdminController@show');

// Like posts
// Route::get('uploads/like/{id}', ['as' => 'uploads.like', 'uses' => 'LikeController@likedUpload']);
Route::post('/like', 'ImageController@like')->name('like');
