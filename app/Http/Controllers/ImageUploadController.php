<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //
    $this->validate($request, [
    'filename' => 'required',
    'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	]);
}
