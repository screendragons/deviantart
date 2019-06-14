<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $uploads = Upload::get();
        // dd($uploads);

        return view('home')
            ->with('uploads', $uploads);
    }

    // public function show()
    // {
    //     $images = Image::get();
    //     if (count ($images)){
    //         return view('home', ['images'=>$images]);
    //     }   else {
    //         echo "There are no images";
    //     }

    // }

}
