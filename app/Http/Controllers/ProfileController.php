<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Upload;
use DB;
use App\Http\Requests;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showPost(Request $request)
    {

    }


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
        // $posts = Post::all();
        $uploads = Upload::where('user_id', Auth::id())->get();
            return view('profile')->with('uploads', $uploads);
    }
}
