<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Auth;
use Image;
use Storage;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imageupload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            Image::make($request->file('file'))
                ->resize(600, 300, function($constraint){
                    $constraint->aspectRatio();
                })
                ->save(storage_path('app\\public\\'.$fileNameToStore));
                // ->storeAs('public', $fileNameToStore);
            // $path = $request->file('file')->storeAs('public', $fileNameToStore);
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

        // dd($upload);

        // return redirect()->back();
         return redirect('home');
            // ->with('uploads', $upload);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $upload = Upload::find($id);

        return view('show')
            ->with('upload', $upload);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upload = Upload::find($id);

        return view('edit')
            ->with('upload', $upload);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request);
        $upload = Upload::find($id);
        $upload->name = request('title');
        $upload->description = request('description');
        $upload->save();

        return redirect('profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $filename =  $request->get('filename');
        // upload::where('filename',$filename)->delete();
        // $path=public_path().'/images/'.$filename;
        // if (file_exists($path)) {
        //     unlink($path);
        // }
        // return $filename;

        // $upload = Upload::find($id);

        // Storage::delete('/public/'.$upload['filename']);

        // $upload->delete();
        // return view('home');

        $upload = Upload::find($id)->delete();
        return redirect('home');

    }
}
