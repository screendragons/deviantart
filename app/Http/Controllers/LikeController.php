<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likedUpload($id)
        {
            // here you can check if product exists or is valid or whatever

            $this->handleLike('App\Post', $id);
            return redirect()->back();
        }

        public function handleLike($type, $id)
        {
            $existing_like = Like::withTrashed()->whereLikeableType($type)->whereLikeableId($id)->whereUserId(Auth::id())->first();

            if (is_null($existing_like)) {
                Like::create([
                    'user_id'       => Auth::id(),
                    'likes_id'   => $id,
                    'likes_type' => $type,
                ]);
            } else {
                if (is_null($existing_like->deleted_at)) {
                    $existing_like->delete();
                } else {
                    $existing_like->restore();
                }
            }
        }
    public function store()
    {

    }
}
