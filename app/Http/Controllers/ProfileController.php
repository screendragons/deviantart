<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depress;
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
        $posts = Depress::all();
        return view('profile')->with('posts', $posts);
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
        return view('Profile');
    }
}
