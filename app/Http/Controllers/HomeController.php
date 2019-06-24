<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\User;
use App\Like;
use Auth;

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
        $uploads = Upload::select('uploads.*')
            ->with('user')
            // ->join('likes','upload.id', 'likes.upload_id')
            ->orderBy('uploads.id', 'desc')->paginate(2);
        // dd('1');
        // dd($uploads);

        $userLikes = Like::where('user_id', Auth::id())
            ->pluck('upload_id')->toArray();


        return view('home')
            ->with('uploads', $uploads)
            ->with('userLikes', $userLikes);

    }

    public function show()
    {
        // $images = Image::get();
        // if (count ($images)){
        //     return view('home', ['images'=>$images]);
        // }   else {
        //     echo "There are no images";
        // }

    }

    //like post
    public function like(Request $request)
    {
        $upload_id = $request['uploadId'];
        $is_Like = $request['isLike'] === 'true';
        $update = false;
        $upload = Upload::find($upload_id);
        if (!$upload){
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('upload_id', $upload_id)->first();
        if ($like){
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;

            }
        } else {
            $like = new Like();
        }

        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->upload_id = $upload->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }

}
