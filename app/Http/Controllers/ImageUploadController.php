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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('cover_image')){
            // Get file name with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalName();
            // Filename to store
            $fileNameToStore = $file.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'no_image.jpg';
        }

        $image = $request->file('file');
        // $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->user_id = auth()->user()->id;
        $imageUpload->name = $imageName;
        $imageUpload->name = str_slug($file['extension']);

        $imageUpload->description = $imageName;
        $imageUpload->media_type = '';
        $imageUpload->datasize = 1;
        $imageUpload->cover_image = $fileNameToStore;
        $imageUpload->save();
        return response()->json(['succes'=>$imageName]);

        return view('imageupload');
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
