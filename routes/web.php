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

// Weergeeft de admin pagina
Route::get('/admin', 'AdminController@index')->name('admin');

// Weergeeft de likes pagina
Route::get('/likespage', 'LikesPageController@index')->name('likespage');

// Create
Route::get('/image/create','ImageController@create')->name('image.create');
Route::post('/image/store','ImageController@store')->name('image.store');

// Read
Route::get('/image/{id}','ImageController@show');

//Edit
Route::get('/image/{id}/edit', 'ImageController@edit');
// Update
Route::put('/image/{id}', 'ImageController@update');

// Delete
Route::delete('/image/{id}','ImageController@destroy')->name('image.destroy');

// Route::resource('images', 'ImageUploadController');
// Route::resource('images', 'HomeController');
Route::resource('admin', 'AdminController');

// Like posts
Route::get('/like/{id}', 'LikeController@store')->name('like');

Route::get('/likespage/{id}', 'LikesPageController@destroy');
