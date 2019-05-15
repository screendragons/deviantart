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

	use App\ImageUpload;

	public function fileStore(Request $request)
	    {
	        $image = $request->file('file');
	        $imageName = $image->getClientOriginalName();
	        $image->move(public_path('images'),$imageName);

	        $imageUpload = new ImageUpload();
	        $imageUpload->filename = $imageName;
	        $imageUpload->save();
	        return response()->json(['success'=>$imageName]);
	    }
}
