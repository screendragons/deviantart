<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Auth;

class ImageUploadController extends Controller
{


    public function create()
    {
        return view('imageupload');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'file' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('file')){
            // dd('here');
            // Get file name with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalName();
            // Filename to store
            $fileNameToStore = str_slug($filename.'_'.time()).'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public', $fileNameToStore);
            // $image = $request->file('file');
            // $imageName = $image->getClientOriginalName();
            // $image->move(public_path('images'),$filenameWithExt);
        } else {
            $fileNameToStore = 'no_image.jpg';
        }

        $upload = new Upload();
        $upload->user_id = Auth::id();
        $upload->name = $request->title;
        $upload->filename = $fileNameToStore;
        $upload->description = $request->body;
        $upload->media_type = '';
        $upload->datasize = 1;
        $upload->save();

        return redirect()->back();
    }


    public function show($id)
    {
        $images = Image::get();
        if (count ($images)){
            return view('home', ['images'=>$images]);
        }   else {
            echo "There are no images";
        }
    }


    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        upload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }

}
