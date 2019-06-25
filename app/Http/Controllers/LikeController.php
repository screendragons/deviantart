<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\Like;
use Auth;
use DB;

class LikeController extends Controller
{
    // public function likedUpload($id)
    //     {
    //         // here you can check if product exists or is valid or whatever

    //         $this->handleLike('App\Post', $id);
    //         return redirect()->back();
    //     }

    //     public function handleLike($type, $id)
    //     {
    //         $existing_like = Like::withTrashed()->whereLikeableType($type)->whereLikeableId($id)->whereUserId(Auth::id())->first();

    //         if (is_null($existing_like)) {
    //             Like::create([
    //                 'user_id'       => Auth::id(),
    //                 'likes_id'   => $id,
    //                 'likes_type' => $type,
    //             ]);
    //         } else {
    //             if (is_null($existing_like->deleted_at)) {
    //                 $existing_like->delete();
    //             } else {
    //                 $existing_like->restore();
    //             }
    //         }
    //     }

    public function index()
    {

    }
    public function store(Request $request, $id)
    {
        // dd($id);
        $like = Like::where('user_id', Auth::id())->where('upload_id', $id)->count();
        // return view('home')->with('userLikes', $userLikes);
// dd($like);
        if ($like) {
            // dd('remove');
            // remove like
            $like = Like::where('user_id', Auth::id())->where('upload_id', $id)->delete();
        }
        else {
            // dd('create');
            // create like
            //store like
            $like = new Like();
            $like->user_id = Auth::id();
            $like->upload_id = $id;
            $like->like = 1;
            $like->save();


        }
        return redirect()->back();
    }

    public function show()
    {

    }
}
