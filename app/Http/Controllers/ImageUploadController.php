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
        // $file = pathinfo($request->$image->getClientOriginalName());

        $image->move(public_path('images'),$imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->name = $imageName;
        // $imageUpload->name = str_slug($file['extension']);

        $imageUpload->description = $imageName;
        $imageUpload->media_type = '';
        $imageUpload->datasize = 1;
        $imageUpload->save();
        return response()->json(['succes'=>$imageName]);

        return view('imagestore');
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
