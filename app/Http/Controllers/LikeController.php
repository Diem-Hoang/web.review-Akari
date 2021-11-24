<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\CtvLike;
use App\Models\CtvPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function postLike($id)
    {
        $post = Post::find($id);
        $post_id = $post->id;
        $like = new Like;
        $like->post_id = $post_id;
        $like->user_id = Auth::user()->id;
        $like->save();
        
        return redirect()->back();
    }

    public function postUnLike($id)
    {
        $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();
        return redirect()->back();
    }
    public function ctvpostLike($id)
    {
        $post = CtvPost::find($id);
        $post_id = $post->id;
        $like = new CtvLike;
        $like->post_id = $post_id;
        $like->user_id = Auth::user()->id;
        $like->save();
        
        return redirect()->back();
    }

    public function ctvpostUnLike($id)
    {
        $like = CtvLike::where('post_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();
        return redirect()->back();
    }
}
