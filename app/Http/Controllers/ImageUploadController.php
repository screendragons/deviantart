<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;

class ImageUploadController extends Controller
{
    public function fileCreate()
    {
        return view('imageupload');
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->title = $imageName;
        $imageUpload->original_title = $imageName;
        $imageUpload->poster = '';
        $imageUpload->mediatype = '';
        $imageUpload->save();
        return response()->json(['succes'=>$imageName]);
    }

    public function show($id)
    {
        $images = Images::get();
        if (count ($images)){
            return view('home', ['images'=>$images]);
        }   else {
            echo "There are no images";
        }
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }


}
